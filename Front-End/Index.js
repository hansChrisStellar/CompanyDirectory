import { getAllPersonnel } from "./Functions/Personnel/getAllPersonnel.js";
import { getAllDepartment } from "./Functions/Department/getAllDepartment.js";
import { getAllLocations } from "./Functions/Location/getAllLocations.js";

await getAllPersonnel();
await getAllDepartment();
await getAllLocations();
