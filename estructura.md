# Estructura datos

Estructura de tablas

## Pieza

| Nombre campo |  Tipo Campo   | Atributos | Descripcion |
| :----------- | :-----------: | :-------- | :---------- |
| id           |      ID       |           |             |
| NPRO         |    string     |           |             |
| DPRO         |    string     |           |             |
| TVEH         |    string     |           |             |
| ZDOC         |    string     | nullable  |             |
| CPRO         |    string     | nullable  |             |
| CORT         |    string     | nullable  |             |
| REEM         |    string     | nullable  |             |
| UBIC         |    string     | nullable  |             |
| STOC         |    integer    |           | default(0)  |
| PCUR         |    string     | nullable  |             |
| PEND         |    string     | nullable  |             |
| DIFE         |    string     | nullable  |             |
| FUEN         |     date      | nullable  |             |
| FUSA         |     date      | nullable  |             |
| BPCL         | double(18, 2) |           | default(0)  |
| PDUM         | double(18, 2) |           | default(0)  |
| PDUA         | double(18, 2) |           | default(0)  |
| BPNC         | double(18, 2) |           | default(0)  |
| FAM1         |    string     | nullable  |             |
| FAMI         |    string     | nullable  |             |
| NPRV         |    string     | nullable  |             |
| CADU         |    string     | nullable  |             |

## Cliente

| Nombre campo | Tipo Campo | Atributos | Descripcion |
| :----------- | :--------: | :-------- | :---------- |
| id           |     ID     |           |             |
| nombre       |   string   |           |             |
| codigo       |   string   | nullable  |             |
| tipo         |   string   | nullable  |             |
| celular      |   string   | nullable  |             |
| telefono     |   string   | nullable  |             |
| contacto     |   string   | nullable  |             |
| email        |   string   | nullable  |             |
| direccion    |    text    | nullable  |             |
| ciudad       |   string   | nullable  |             |
| estado       |   string   | nullable  |             |
| postalcode   |   string   | nullable  |             |
| pais         |   string   | nullable  |             |
| status       |   string   | nullable  |             |

## Categoria

| Nombre campo | Tipo Campo | Atributos | Descripcion |
| :----------- | :--------: | :-------- | :---------- |
| id           |     ID     |           |             |
| nombre       |   string   |           |             |
| parent_id    |   string   |           |             |
| CPRO         |   string   |           |             |
| descripcion  |    text    | nullable  |             |

## Orden y detalle

| Nombre campo | Tipo Campo | Atributos | Descripcion |
| :----------- | :--------: | :-------- | :---------- |
