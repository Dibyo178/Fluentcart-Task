<?php
/**
 * Plugin Name: FluentCart Shipping Restriction
 * Description: Restrict shipping by country with a professional Vue.js UI and real-time validation.
 * Version: 1.0.0
 * Author: Sourov Purkayastha
 * Author URI: https://sourovdev.space/
 */

if (!defined('ABSPATH')) exit;

// 1. Setup Admin Menu
add_action('admin_menu', function () {
    add_menu_page(
        'Shipping Rules', 
        'FC Shipping', 
        'manage_options', 
        'fc-shipping-restrictions', 
        'fc_render_admin_page', 
        'dashicons-admin-site', 
        56
    );
});

// 2. Data Persistence via AJAX (MySQL Storage)
add_action('wp_ajax_fc_save_shipping_settings', function () {
    check_ajax_referer('fc_shipping_nonce', 'nonce');
    
    if(isset($_POST['allowed'])) {
        update_option('fc_allowed_countries', json_decode(stripslashes($_POST['allowed']), true));
    }
    
    if(isset($_POST['excluded'])) {
        update_option('fc_excluded_countries', json_decode(stripslashes($_POST['excluded']), true));
    }
    
    wp_send_json_success();
});

// 3. Admin UI 
function fc_render_admin_page() {
    ?>
    <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <div id="fcApp" class="min-h-screen bg-slate-50 p-6 md:p-12" v-cloak>
        <div class="max-w-5xl mx-auto">
            <div class="flex items-center justify-between mb-8 p-6 bg-white rounded-2xl shadow-sm border border-slate-200">
                <div class="flex items-center gap-4">
                    <div class="p-3 rounded-xl shadow-lg shadow-indigo-200">
                        <img class="w-12 h-12 object-contain" src="https://i.ibb.co.com/W4cgwDRJ/download.png" alt="Shipping Icon">
                    </div>
                    <div>
                        <h1 class="text-2xl font-black text-slate-800 leading-none">Shipping Zone Setup</h1>
                        <p class="text-slate-500 mt-1 font-medium">Manage global and excluded shipping destinations</p>
                    </div>
                </div>
                <button @click="save" :disabled="saving" class="flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-xl font-bold transition-all transform active:scale-95 disabled:opacity-50 shadow-lg shadow-indigo-100">
                    <svg v-if="!saving" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path>
                    </svg>
                    <span>{{ saving ? 'Processing...' : 'Save Details' }}</span>
                </button>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="bg-emerald-50 border-b border-emerald-100 p-5 flex items-center gap-3">
                        <div class="bg-emerald-500 p-2 rounded-lg">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <h2 class="font-extrabold text-emerald-900 uppercase tracking-wider text-sm">Allowed Countries</h2>
                    </div>
                    <div class="p-6">
                        <div class="relative mb-6">
                            <input v-model="newAllowed" @keyup.enter="add('allowed')" placeholder="Enter ISO (e.g. BD, US)" class="w-full pl-4 pr-12 py-4 bg-slate-50 border-2 border-slate-100 rounded-2xl focus:border-emerald-400 focus:bg-white outline-none transition-all font-bold text-slate-700 uppercase">
                            <button @click="add('allowed')" class="absolute right-3 top-3 bg-emerald-100 hover:bg-emerald-200 text-emerald-700 p-2 rounded-xl transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="flex flex-wrap gap-2 min-h-[100px] content-start">
                            <div v-for="(c, i) in allowed" :key="i" class="group flex items-center gap-2 bg-slate-100 hover:bg-emerald-500 hover:text-white px-4 py-2 rounded-xl border border-slate-200 transition-all">
                                <span class="font-black">{{c}}</span>
                                <button @click="remove('allowed', i)" class="text-slate-400 group-hover:text-emerald-100">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"/>
                                    </svg>
                                </button>
                            </div>
                            <p v-if="allowed.length === 0" class="text-slate-400 text-center w-full mt-4 italic">No specific allowed list (Global Access)</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="bg-rose-50 border-b border-rose-100 p-5 flex items-center gap-3">
                        <div class="bg-rose-500 p-2 rounded-lg">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </div>
                        <h2 class="font-extrabold text-rose-900 uppercase tracking-wider text-sm">Excluded Countries</h2>
                    </div>
                    <div class="p-6">
                        <div class="relative mb-6">
                            <input v-model="newExcluded" @keyup.enter="add('excluded')" placeholder="Enter ISO (e.g. FR, UK)" class="w-full pl-4 pr-12 py-4 bg-slate-50 border-2 border-slate-100 rounded-2xl focus:border-rose-400 focus:bg-white outline-none transition-all font-bold text-slate-700 uppercase">
                            <button @click="add('excluded')" class="absolute right-3 top-3 bg-rose-100 hover:bg-rose-200 text-rose-700 p-2 rounded-xl transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="flex flex-wrap gap-2 min-h-[100px] content-start">
                            <div v-for="(c, i) in excluded" :key="i" class="group flex items-center gap-2 bg-slate-100 hover:bg-rose-500 hover:text-white px-4 py-2 rounded-xl border border-slate-200 transition-all">
                                <span class="font-black">{{c}}</span>
                                <button @click="remove('excluded', i)" class="text-slate-400 group-hover:text-rose-100">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"/>
                                    </svg>
                                </button>
                            </div>
                            <p v-if="excluded.length === 0" class="text-slate-400 text-center w-full mt-4 italic">No exclusions set</p>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>

    <script>
    const { createApp } = Vue;
    createApp({
        data() { 
            return { 
                allowed: <?php echo json_encode(get_option('fc_allowed_countries', [])); ?>, 
                excluded: <?php echo json_encode(get_option('fc_excluded_countries', [])); ?>, 
                newAllowed: '', 
                newExcluded: '', 
                saving: false 
            } 
        },
        methods: {
            add(type) {
                let f = type === 'allowed' ? 'newAllowed' : 'newExcluded';
                let val = this[f].toUpperCase().trim();
                if(val && !this[type].includes(val)) { 
                    this[type].push(val); 
                    this[f] = ''; 
                }
            },
            remove(type, i) { 
                this[type].splice(i, 1); 
            },
            async save() { 
                this.saving = true; 
                const data = new FormData(); 
                data.append('action', 'fc_save_shipping_settings'); 
                data.append('nonce', "<?php echo wp_create_nonce('fc_shipping_nonce'); ?>"); 
                data.append('allowed', JSON.stringify(this.allowed)); 
                data.append('excluded', JSON.stringify(this.excluded)); 
                try {
                    await axios.post(ajaxurl, data); 
                    alert('Settings Updated Successfully! ✅'); 
                } catch (e) { 
                    alert('Error saving settings! ❌'); 
                }
                this.saving = false; 
            }
        }
    }).mount('#fcApp');
    </script>
    <style>
        [v-cloak] { display: none; } 
        #adminmenuwrap { z-index: 999; }
    </style>
    <?php
}

// 4. Frontend Real-time Validation and Alert Handling
add_action('wp_footer', function() {
    $allowed = (array)get_option('fc_allowed_countries', []);
    $excluded = (array)get_option('fc_excluded_countries', []);
    ?>
    <script type="text/javascript">
    (function($) {
        "use strict";
        const allowed = <?php echo json_encode($allowed); ?>;
        const excluded = <?php echo json_encode($excluded); ?>;
        const msgText = "🚫 We do not ship to this country.";
        const msgId = 'fc-restriction-alert';

        function checkLogic() {
            // 1. Detect Country Value (Multiple Selector Support)
            let country = $('select[name*="country"]').val() || 
                          $('[data-field="country"] select').val() ||
                          $('.fct_country_select select').val() ||
                          $('#billing_country').val();

            if (!country) return;
            country = country.toUpperCase();

            let isBlocked = false;
            // Exclusion Logic
            if (excluded.includes(country)) isBlocked = true;
            // Whitelist Logic
            if (allowed.length > 0 && !allowed.includes(country)) isBlocked = true;

            // 2. Submit Button Selector
            const btn = $('.fct-checkout-submit, .fc_place_order, .fct_btn_primary, button[type="submit"], #fct_order_submit, #place_order');

            if (isBlocked) {
                // 3. Inject Alert Message
                if ($('#' + msgId).length === 0) {
                    const alertHtml = `<div id="${msgId}" style="background:#be123c; color:#fff; padding:20px; margin:20px 0; border-radius:12px; text-align:center; font-weight:bold; border:2px solid #9f1239; font-size:18px; z-index:9999; position:relative; clear:both;">${msgText}</div>`;
                    
                    let target = $('.fct-checkout-payment, .fc_payment_methods, .fct_btn_primary, #payment').first();
                    
                    if(target.length) {
                        target.before(alertHtml);
                    } else {
                        $('form').first().prepend(alertHtml);
                    }
                }
                
                // 4. Lock Transaction Button
                btn.attr('disabled', 'disabled').css({
                    'opacity':'0.3', 
                    'pointer-events':'none', 
                    'cursor':'not-allowed'
                });
            } else {
                // Remove Alert and Unlock Button
                $('#' + msgId).remove();
                btn.removeAttr('disabled').css({
                    'opacity':'1', 
                    'pointer-events':'auto', 
                    'cursor':'pointer'
                });
            }
        }

        $(document).ready(function() {
            // Event Listeners
            $(document).on('change', 'select[name*="country"]', checkLogic);
            
            // Mutation Observer for dynamic content updates
            const observer = new MutationObserver(checkLogic);
            observer.observe(document.body, { childList: true, subtree: true });
            
            // Polling backup for legacy environments
            setInterval(checkLogic, 1500);
        });
    })(jQuery);
    </script>
    <?php
}, 999);