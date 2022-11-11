import { getAllPersonnel } from "./Functions/Personnel/getAllPersonnel.js";
import { getAllDepartment } from "./Functions/Department/getAllDepartment.js";
import { getAllLocations } from "./Functions/Location/getAllLocations.js";

document.getElementById("loadingModal").classList.add("loadingModal");
document.getElementById("loadingModal").classList.remove("loadingModalOff");
await getAllPersonnel();
await getAllDepartment();
await getAllLocations();
document.getElementById("loadingModal").classList.add("loadingModalOff");
document.getElementById("loadingModal").classList.remove("loadingModal");
