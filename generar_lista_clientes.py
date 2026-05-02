import random
import pandas as pd

# Ejemplo: cargar datasets de Kaggle (ajusta las rutas a tus archivos locales)
# nombres_df = pd.read_csv("nombres.csv")   # dataset con nombres
# apellidos_df = pd.read_csv("apellidos.csv")  # dataset con apellidos

nombres = ["Alejandro", "Martín", "Javier", "Diego", "Nicolás", "Marco", "Antonio",
           "Laura", "Sofía", "Camila", "Valentina", "Mariana", "Susana", "Ana"]

apellidos = ["Ramírez", "González", "Ortega", "Fernández", "Herrera", "Sánchez",
             "Martínez", "Delgado", "Torres", "Rojas", "Castro", "Hernández"]

lugares = [
    {"ciudad": "Buenos Aires", "estado": "CABA", "postalcode": "1000", "pais": "Argentina"},
    {"ciudad": "Madrid", "estado": "Madrid", "postalcode": "28001", "pais": "España"},
    {"ciudad": "Ciudad de México", "estado": "CDMX", "postalcode": "01000", "pais": "México"},
    {"ciudad": "Bogotá", "estado": "Cundinamarca", "postalcode": "110111", "pais": "Colombia"},
    {"ciudad": "Santiago", "estado": "Región Metropolitana", "postalcode": "8320000", "pais": "Chile"},
    {"ciudad": "Lima", "estado": "Lima", "postalcode": "15001", "pais": "Perú"},
    {"ciudad": "Caracas", "estado": "Distrito Capital", "postalcode": "1010", "pais": "Venezuela"},
    {"ciudad": "Montevideo", "estado": "Montevideo", "postalcode": "11000", "pais": "Uruguay"},
    {"ciudad": "Quito", "estado": "Pichincha", "postalcode": "170150", "pais": "Ecuador"},
    {"ciudad": "Barcelona", "estado": "Cataluña", "postalcode": "08001", "pais": "España"}
]

def generar_lista_clientes(num=20, doble_apellido=True):
    lista = []
    for i in range(1, num+1):
        nombre = random.choice(nombres)
        apellido1 = random.choice(apellidos)
        if doble_apellido:
            apellido2 = random.choice(apellidos)
            nombre_completo = f"{nombre} {apellido1} {apellido2}"
        else:
            nombre_completo = f"{nombre} {apellido1}"
        
        lugar = random.choice(lugares)
        lista.append([
            i,
            nombre_completo,
            lugar["ciudad"],
            lugar["estado"],
            lugar["postalcode"],
            lugar["pais"]
        ])
    return lista

# Generar 30 registros
lista_generada = generar_lista_clientes(100, doble_apellido=True)

# Convertir a DataFrame
df = pd.DataFrame(lista_generada, columns=["ID", "Nombre Completo", "Ciudad", "Estado", "PostalCode", "País"])

# Guardar en CSV
df.to_csv("data/csv/clientes.csv", index=False, encoding="utf-8")

print("Archivo 'clientes.csv' generado con éxito.")
