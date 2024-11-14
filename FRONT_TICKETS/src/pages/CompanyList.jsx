import React from "react";
import Header from "../components/Header";
import Content from "../components/Content";

const CompanyList = () => {
  return (
    <div>
      <Header>
        <h2>BOLETOS ONLINE</h2>
      </Header>
      <Content className="left pd-05em">
        <h3>Selecciona una compañia de buses </h3>
      </Content>
    </div>
  );
};

export default CompanyList;
