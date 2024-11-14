import CompanyList from "../pages/CompanyList";
import Home from "../pages/Home";
import InfoForm from "../pages/InfoForm";

const routesList = [
  {
    path: "/",
    element: <Home />,
  },
  {
    path: "/info-form",
    element: <InfoForm />,
  },
  {
    path: "/companies",
    element: <CompanyList />,
  },
];

export default routesList;
