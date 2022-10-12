import mysql.connector as sql
db=sql.connect(
    host="localhost",
    user="ads_academico",
    passwd="123456",
    database="academino_andres"
)

cursor_ads=db.cursor()
sql="select person.ci, person.nombe, person.ap_paterno, person.ap_materno, person.departamento, inscripcion.sigla, CASE person.departamento WHEN 'CH-01' THEN inscripcion.nota_final WHEN 'LP-02' THEN inscripcion.nota_final WHEN 'CB-03' THEN inscripcion.nota_final WHEN 'OR-04' THEN inscripcion.nota_final WHEN 'PT-05' THEN inscripcion.nota_final WHEN 'TJ-06' THEN inscripcion.nota_final WHEN 'SC-07' THEN inscripcion.nota_final WHEN 'BE-08' THEN inscripcion.nota_final WHEN 'PD-09' THEN inscripcion.nota_final ELSE 'no esta inscrito' END AS promedio FROM person, inscripcion WHERE person.ci = inscripcion.ci"
                
cursor_ads.execute(sql)

for fila in cursor_ads:
    print(fila)
db.close()



