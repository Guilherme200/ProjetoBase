import { Breadcrumb, BreadcrumbItem } from "./components/Breadcrumb";
import { ApproveButtons } from "./components/Buttons";
import { DataList } from "./components/DataList";
import { Loader } from "./components/Loader";
import { AddressComponent } from "./components/AddressComponent";

Vue.component("breadcrumb-item", BreadcrumbItem);
Vue.component("breadcrumb", Breadcrumb);
Vue.component("data-list", DataList);
Vue.component("approve-buttons", ApproveButtons);
Vue.component("loader", Loader);

Vue.component("address-component", AddressComponent);

