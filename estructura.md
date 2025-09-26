# Estructura datos

Modelos

* Pieza

| Nombre campo  | Tipo Campo    | Atributos | Descripcion   |
|:--------------|:-------------:|:----------|:--------------|
| NPRO          | string        |           |               |
| DPRO          | string        |           |               |
| TVEH          | string        |           |               |
| ZDOC          | string        | nullable  |               |
| CPRO          | string        | nullable  |               |
| CORT          | string        | nullable  |               |
| REEM          | string        | nullable  |               |
| UBIC          | string        | nullable  |               |
| STOC          | integer       |           | default(0)    |
| PCUR          | string        | nullable  |               |
| PEND          | string        | nullable  |               |
| DIFE          | string        | nullable  |               |
| FUEN          | date          | nullable  |               |
| FUSA          | date          | nullable  |               |
| BPCL          | double(18, 2) |           | default(0)    |
| PDUM          | double(18, 2) |           | default(0)    |
| PDUA          | double(18, 2) |           | default(0)    |
| BPNC          | double(18, 2) |           | default(0)    |
| FAM1          | string        | nullable  |               |
| FAMI          | string        | nullable  |               |
| NPRV          | string        | nullable  |               |
| CADU          | string        | nullable  |               |

* Cliente

| Nombre campo      | Tipo Campo    | Atributos     | Descripcion   |
|:------------------|:-------------:|:--------------|:--------------|
| nombre_empresa    | string        |               |               |
| codigo_tributario | string        | nullable      |               |
| tipo              | string        | nullable      |               |
| celular           | string        | nullable      |               |
| telefono1         | string        | nullable      |               |
| telefono2         | string        | nullable      |               |
| contacto          | string        | nullable      |               |
| email1            | string        | nullable      |               |
| email2            | string        | nullable      |               |
| direccion1        | text          | nullable      |               |
| ciudad1           | string        | nullable      |               |
| estado1           | string        | nullable      |               |
| postalcode1       | string        | nullable      |               |
| pais1             | string        | nullable      |               |
| direccion2        | text          | nullable      |               |
| ciudad2           | string        | nullable      |               |
| estado2           | string        | nullable      |               |
| postalcode2       | string        | nullable      |               |
| pais2             | string        | nullable      |               |
| actividad         | text          | nullable      |               |
| observaciones     | text          | nullable      |               |
| status            | string        | nullable      |               |

* Categoria

| Nombre campo      | Tipo Campo    | Atributos     | Descripcion   |
|:------------------|:-------------:|:--------------|:--------------|
| nombre            | string        |               |               |
| codigo            | string        |               |               |
| descripcion       | text          | nullable      |               |
