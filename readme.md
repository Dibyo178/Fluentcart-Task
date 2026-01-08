![Shipping Icon](https://sourovdev.space/logo-full.svg) 

# FluentCart Shipping Restriction

**FluentCart Shipping Restriction** is a powerful WordPress plugin that gives store owners control over shipping destinations. Built with a modern **Vue.js 3** and **Tailwind CSS** admin interface, it offers real-time checkout validation to prevent unauthorized orders from restricted regions.

---

## 🔗 Project Resources

- 🌐 **Live Demo:** [fluentcart.sourovdev.space](https://fluentcart.sourovdev.space/)
- 👨‍💻 **Developer Portfolio:** [sourovdev.space](https://sourovdev.space/)
- 📦 **Tech Stack:** PHP, MySQL, Vue.js 3, Tailwind CSS, Axios, FluentCart Hooks.

---

## ✨ Core Features

### 🌍 Universal Shipping Restrictions
- **Allowed List:** Restrict shipping only to specific countries (Whitelist).
- **Excluded List:** Block specific countries even if global shipping is enabled (Blacklist).
- **Conflict Management:** Built-in logic to prevent adding the same country to both lists simultaneously.

### 🛠 Dynamic System Modes
- **Global Mode:** Apply shipping rules across all available shipping methods.
- **Per Method Restriction:** Select a specific shipping method from the dropdown to apply rules exclusively to that method.

### ⚡ Real-time Checkout Validation
- **Live Detection:** Monitors the country selection field on the checkout page instantly.
- **Smart Prevention:** Automatically disables the **"Place Order"** button and displays a high-visibility warning message if a restricted country is selected.

### 📊 Order Metadata & Logging
- **Detailed Insights:** Every order captures the country and validation status (Passed/Flagged) in the metadata.
- **Admin Logs:** View the last 10 restriction activities directly from the plugin dashboard to monitor blocked attempts.

---

## 🚀 Installation & Setup

1. Ensure the **FluentCart** core plugin is installed and activated on your WordPress site.
2. Upload the `fluentcart-shipping-restriction` folder to the `/wp-content/plugins/` directory.
3. Activate the plugin through the **'Plugins'** menu in WordPress.
4. Navigate to **FC Shipping** in the sidebar to configure your shipping zones.

---

## 🛠 Tech Stack Details

| Component | Technology Used |
| :--- | :--- |
| **Backend** | PHP (WordPress Plugin API) |
| **Database** | MySQL (WPDB Custom Meta) |
| **Frontend UI** | Vue.js 3 (Composition-ready) |
| **Styling** | Tailwind CSS 3.0 |
| **Interactions** | Axios & SweetAlert2 |
| **UI Components** | Dashicons & Custom SVGs |

---

## 📸 Admin Dashboard Preview

The admin panel features a clean, professional layout including:
- **System Mode Selector:** Switch between Global and specific Shipping Method modes.
- **Interactive Country Tags:** Add or remove country ISO codes using a sleek chip-based interface.
- **Real-time Status Logs:** A dedicated section to track order validation history at a glance.

---

## ✅ Key Logic Flow

1. **Input:** The admin enters a country ISO code (e.g., US, UK, BD).
2. **Priority:** The system prioritizes the **Excluded** list over the **Allowed** list for maximum security.
3. **Frontend Hook:** A JavaScript observer monitors the checkout form.
4. **Validation:** If the selection violates the rules, the checkout button is locked, and the reason is displayed to the user.
5. **Final Log:** The validation status is recorded in the order metadata upon attempt.

---

## 👨‍💻 Author

**Sourov Purkayastha** Full Stack Developer  
🌐 [sourovdev.space](https://sourovdev.space/)





