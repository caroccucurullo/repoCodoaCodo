//INGRESAR NOMBRE DEL ALUMNO
let nombreAlumno = prompt("INGRESA NOMBRE DEL ALUMNO");
console.log("NOMBRE DEL ALUMNO: " + nombreAlumno);

//INGRESAR LAS NOTAS DEL ALUMNO
var nota1 = parseFloat(prompt("Ingrese su primer nota"));
var nota2 = parseFloat(prompt("Ingrese su segunda nota"));
var nota3 = parseFloat(prompt("Ingrese su tercer nota"));

//CALCULAMOS EL PROMEDIO
var promedio = (nota1 + nota2 + nota3)/3;

if (promedio < 6) {
    alert("NO APROBASTE! TU PROMEDIO ES: " + promedio)
}else{
    alert("APROBASTE! TU PROMEDIO ES: " + promedio)
}
