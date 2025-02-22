import "./bootstrap";
import "../css/app.css";
import "/public/css/style.css";
import "/public/css/responsive.css";

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { ZiggyVue } from "../../vendor/tightenco/ziggy";
import { createPinia } from "pinia";

// import VueDatePicker from '@vuepic/vue-datepicker';
import "@vuepic/vue-datepicker/dist/main.css";
import "vue-search-select/dist/VueSearchSelect.css";

const appName = import.meta.env.VITE_APP_NAME || "Laravel";

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        ),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(createPinia())
            .mount(el);
    },
    progress: {
        delay: 250,
        color: "#fd7e14",
        includeCSS: true,
        showSpinner: true,
    },
});
