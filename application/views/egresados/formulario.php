<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
</br>
<div class="tabs-container">
	<div class="tabs-left">
    	<ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1"> Perfil</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-2">
                                Pertinencia Y Disponibilidad De Medios Y Recursos Para El Aprendizaje</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-3">Ubicación Laboral</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-4">Desempeño Profesional</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-5">
                                Expectativas De Desarrollo, Superación Profesional Y De Actualización</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-6">Participación Social</a></li>
                              <li class=""><a data-toggle="tab" href="#tab-7">Comentarios Y Sugerencias</a></li>
                            </ul>
                  <form  method="post" action="ajax/ajax_egresado.php?opc=33">
                            <div class="tab-content ">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">
                  
                  <div class="row">
        		  <div class="col-lg-11">                  
                  <div class="row">
                       <div class="col-lg-5">
                         <div class="form-group">
                            <label for="nombre">Nombre(s)*</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                         </div>
                       </div>
                       <div class="col-lg-5">
                         <div class="form-group">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos">
                         </div>
                       </div>
               	  </div>
         		  
                  <div class="form-group" style="width:40%">
                    <label for="ncontrol">No. de Control</label>
                    <input type="text" class="form-control" id="ncontrol" name="ncontrol">
                  </div>
                  
                  <div class="form-group" id="data_1" style="width:40%">
                     <label for="fnacimiento" class="font-noraml">Fecha de nacimiento</label>
                     <div class="input-group date">
                     	<span class="input-group-addon">
                        	<i class="fa fa-calendar"></i>
                        </span>
                        <input type="date" class="form-control" id="fnacimiento" name="fnacimiento" value="03/04/2014" >
                     </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="curp">Curp</label>
                    <input type="text" class="form-control" id="curp" name="curp" style="width:40%">
                  </div>
                  
                  </div>
<label for="Sexo">Sexo</label>
<div class="radio">
  <label>
    <input type="radio" name="opciones" id="opciones_2" value="opcion_2"> Mujer
    
  </label>
</div>

<div class="radio">
  <label>
    <input type="radio" name="opciones" id="opciones_2" value="opcion_2"> Hombre
   
  </label>
</div>

<label for="estado_c">Estado civil</label>
<div class="radio">
  <label>
    <input type="radio" name="opciones1" id="opciones_3" value="opcion_3"> Soltero
    
  </label>
</div>

<div class="radio">
  <label>
    <input type="radio" name="opciones1" id="opciones_4" value="opcion_4"> Casado 
    
  </label>
</div>

<div class="radio">
  <label>
    <input type="radio" name="opciones1" id="opciones_5" value="opcion_5"> Union libre 
    
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="opciones1" id="opciones_6" value="opcion_6"> Divorciado 
    
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="opciones1" id="opciones_7" value="opcion_7"> Viudo 
    
  </label>
</div>

<div class="form-group">
<label for="calle_1">Calle</label>
    <input type="Calle" class="form-control" id="Calle">
   </div>

<div class="form-group">
<label for="colonia_1">Colonia</label>
    <input type="Colonia" class="form-control" id="Colonia">
   </div>

      <div class="form-group">
    <label for="codigo_p">Codigo postal</label>
    <input type="codigo_p" class="form-control" id ="codigo_p">
    
</div>

   <div class="form-group">
    <label for="Localidad">Localidad</label>
    <input type="Localidad" class="form-control" id ="Localidad1">
   
</div>

   <div class="form-group">
    <label for="Municipio">Municipio</label>
    <input type="munic" class="form-control" id ="munic">
    
</div>
        
 

   <div class="form-group">
    <label for="Estado">Estado</label>
    <input type="Est" class="form-control" id ="Est">
    
</div> 


   <div class="form-group">
    <label for="Pais">Pais</label>
    <input type="Pais" class="form-control" id ="Pais"> 
    
</div> 

   <div class="form-group">
    <label for="Telefono">Teléfono</label>
    <input type="tel" class="form-control" id ="tel">
    
</div>

   <div class="form-group">
    <label for="email">Correo electrónico</label>
    <input type="email" class="form-control" id ="email">
    
</div>

<div class="form-group">
<label for="tel_casa">Teléfono de casa</label>
<input type="tel_c" class="form-group" id="tel_c">
	
</div>

<div>
<label for="carrera">Carrera de egreso y especialidad</label>
<select class="form-control">
  <option value="Ingeniería Electromecánica (IELE-208-82)">Ingeniería Electromecánica (IELE-208-82)</option>==$0
  <option value="Ingeniería Electromecánica (IEME-1991-274)">Ingeniería Electromecánica (IEME-1991-274)</option>==$0
  <option>Ingeniería Electromecánica (IEME-1993-291)</option>
  <option>Ingeniería Electromecánica (IELE-2010-210)</option>
  <option>Ingeniería Electrónica (IELC-1982-248)</option>
  <option>Ingeniería Electrónica (IELC-1991-273)</option>
  <option>Ingeniería Electrónica (IELC-1993-292)</option>
  <option>Ingeniería Electrónica (IELC-2010-211)</option>
  <option>Ingeniería en Gestión Empresarial (IGEM-2009-201)</option>
  <option>Ingeniería Química (IQUI-1985-252)</option>
  <option>Ingeniería Química (IQUI-1992-280)</option>
  <option>Ingeniería Química (IQUI-1993-299)</option>
  <option>Ingeniería Química (IQUI-2010-232)</option>
  <option>Ingeniería Industrial (IIND-1993-297)</option>
  <option>Ingeniería Industrial (IIND-2004-297)</option>
  <option>Ingeniería Industrial (IIND-2010-227)</option>
  <option>Ingeniería en Sistemas Computacionales (IS-78-120)</option>
  <option>Ingeniería en Sistemas Computacionales en Programación (IS-80-160)</option>
  <option>Ingeniería Sistemas Computacionales (ISIC-1990-266)</option>
  <option>Ingeniería Sistemas Computacionales (ISIC-1993-296)</option>
  <option>Ingeniería Sistemas Computacionales (ISIC-2010-224)</option>
  <option>Ingeniería Sistemas Computacionales (ISIC-2004-296)</option>
  <option>Licenciatura en Administración (LADM-1993-300)</option>
  <option>Licenciatura en Administración (LADM-2004-300)</option>
  <option>Licenciatura en Administración (LADM-2010-234)</option>
  <option>Licenciatura en Contaduría (LCON-1993-302)</option>
  <option>Licenciatura en Contaduría (LCON-2004-302)</option>
  <option>Contador Público (COPU-2010-205)</option>
</select>


</div>

<div>

<label for="carrera1">Año de egreso</label>
<select class="form-control">
 <option>2018</option>
 <option>2017</option>
 <option>2016</option>
 <option>2015</option>
 <option>2014</option>
 <option>2013</option>
 <option>2012</option>
 <option>2011</option>
 <option>2010</option>
<option>2009</option>
<option>2008</option>
<option>2007</option>
<option>2006</option>
<option>2005</option>
<option>2004</option>
<option>2003</option>
<option>2002</option>
<option>2001</option>
<option>2000</option>
<option>1999</option>
<option>1998</option>

</select>
</div>	

<label for="estado_c">Periodo de egreso</label>
<div class="radio">
  <label>
    <input type="radio" name="opciones2" id="opciones_8" value="opcion_8"> Enero - Junio 
    
  </label>
</div>

<div class="radio">
  <label>
    <input type="radio" name="opciones2" id="opciones_9" value="opcion_9"> Agosto - Diciembre
    
  </label>
</div>

<label for="Titulado">Titulado(a)</label>
<div class="radio">
  <label>
    <input type="radio" name="opciones3" id="opciones_0" value="opcion_0"> Si
    
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="opciones3" id="opciones_0" value="opcion_0"> No
    
  </label>
</div>

<div>

<label for="Dominio">Dominio del idioma extranjero (Ingles)</label>
</div>
<div>
<select class="form-contro2">
 <option>20%</option>
 <option>30%</option>
 <option>40%</option>
 <option>50%</option>
 <option>60%</option>
 <option>70%</option>
 <option>80%</option>
 <option>90%</option>
 <option>100%</option>

</select>
</div>	
  
  <label for="Dominio1"> Dominio de otro idioma extranjero</label>
      <label for="Esp">Especifique</label>
    <input type="esp" class="form-control" id ="esp">


<select class="form-contro3">
 <option>20%</option>
 <option>30%</option>
 <option>40%</option>
 <option>50%</option>
 <option>60%</option>
 <option>70%</option>
 <option>80%</option>
 <option>90%</option>
 <option>100%</option>

</select>
                  </div>
                  
                                    </div>
                                </div>
                                
                                <div id="tab-2" class="tab-pane">
                                    <div class="panel-body">
                  
                  <div class="ibox-description">

                        	<p>Califique la calidad de la educación profesional proporcionada por el personal docente, así como el Plan de Estudios de la carrera que cursó y las condiciones del plantel en cuanto a infraestructura</p>	

                        </div>
                    </br>
                    <div class="form-group" style="margin-bottom: 130px;">
                        <label class="col-sm-4 control-label">1. Calidad de los docentes<br>
                        <small class="text-navy">De forma general evalúe la calidad de los docentes que le impartieron clases</small></label>
                        <div class="col-sm-8">
                        <div><label> 
                        <input type="radio" value="option1" id="optionsRadios1" name="optionsRadios"> Muy buena</label></div>
                        <div><label> 
                        <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Buena</label></div>
                        <div><label> 
                        <input type="radio" value="option3" id="optionsRadios3" name="optionsRadios"> Regular</label></div>
                        <div><label> 
                        <input type="radio" value="option4" id="optionsRadios4" name="optionsRadios"> Mala</label></div>
                         </div>
                     </div>
                     <div class="hr-line-dashed"></div>
                     
                     <div class="form-group" style="margin-bottom: 130px;">
                        <label class="col-sm-4 control-label">2. Plan de estudios<br>
                        <small class="text-navy">Materias que cursaste durante tu carrera</small></label>
                        <div class="col-sm-8">
                        <div><label> 
                        <input type="radio" value="option5" id="optionsRadios5" name="optionsRadios1"> Muy buenos</label></div>
                        <div><label> 
                        <input type="radio" value="option6" id="optionsRadios6" name="optionsRadios1"> Buenos</label></div>
                        <div><label> 
                        <input type="radio" value="option7" id="optionsRadios7" name="optionsRadios1"> Regulares</label></div>
                        <div><label> 
                        <input type="radio" value="option8" id="optionsRadios8" name="optionsRadios1"> Malos</label></div>
                         </div>
                     </div>               
                     <div class="hr-line-dashed"></div>
                     <div class="form-group" style="margin-bottom: 130px;">
                        <label class="col-sm-4 control-label">3. Oportunidad de participar en proyectos de investigación y desarrollo <br>
                        <small class="text-navy"></small></label>
                        <div class="col-sm-8">
                        <div><label> 
                        <input type="radio" value="option1" id="optionsRadios1" name="optionsRadios2"> Muy buena</label></div>
                        <div><label> 
                        <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios2"> Buena</label></div>
                        <div><label> 
                        <input type="radio" value="option3" id="optionsRadios3" name="optionsRadios2"> Regular</label></div>
                        <div><label> 
                        <input type="radio" value="option4" id="optionsRadios4" name="optionsRadios2"> Mala</label></div>
                         </div>
                     </div>  
                  	 <div class="hr-line-dashed"></div>
                     <div class="form-group" style="margin-bottom: 130px;">
                        <label class="col-sm-4 control-label">4. Énfasis que se le presentaba a la investigación dentro del proceso de enseñanza <br>
                        <small class="text-navy"></small></label>
                        <div class="col-sm-8">
                        <div><label> 
                        <input type="radio" value="option1" id="optionsRadios1" name="optionsRadios3"> Muy buena</label></div>
                        <div><label> 
                        <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios3"> Buena</label></div>
                        <div><label> 
                        <input type="radio" value="option3" id="optionsRadios3" name="optionsRadios3"> Regular</label></div>
                        <div><label> 
                        <input type="radio" value="option4" id="optionsRadios4" name="optionsRadios3"> Mala</label></div>
                         </div>
                     </div>
                     <div class="hr-line-dashed"></div>
                     <div class="form-group" style="margin-bottom: 130px;">
                        <label class="col-sm-4 control-label">5. Satisfacción con las condiciones de estudio (infraestructura): <br>
                        <small class="text-navy"></small></label>
                        <div class="col-sm-8">
                        <div><label> 
                        <input type="radio" value="option1" id="optionsRadios1" name="optionsRadios4"> Muy buena</label></div>
                        <div><label> 
                        <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios4"> Buena</label></div>
                        <div><label> 
                        <input type="radio" value="option3" id="optionsRadios3" name="optionsRadios4"> Regular</label></div>
                        <div><label> 
                        <input type="radio" value="option4" id="optionsRadios4" name="optionsRadios4"> Mala</label></div>
                         </div>
                     </div>
                     <div class="hr-line-dashed"></div>
                     <div class="form-group" style="margin-bottom: 130px;">
                        <label class="col-sm-4 control-label">6. Experiencia obtenida a través de la residencia profesional <br>
                        <small class="text-navy"></small></label>
                        <div class="col-sm-8">
                        <div><label> 
                        <input type="radio" value="option1" id="optionsRadios1" name="optionsRadios5"> Muy buena</label></div>
                        <div><label> 
                        <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios5"> Buena</label></div>
                        <div><label> 
                        <input type="radio" value="option3" id="optionsRadios3" name="optionsRadios5"> Regular</label></div>
                        <div><label> 
                        <input type="radio" value="option4" id="optionsRadios4" name="optionsRadios5"> Mala</label></div>
                         </div>
                     </div>
                     <div class="hr-line-dashed"></div>
                     <div class="form-group" style="margin-bottom: 130px;">
                        <label class="col-sm-4 control-label">7. Experiencia obtenida a través de Servicio Social<br>
                        <small class="text-navy"></small></label>
                        <div class="col-sm-8">
                        <div><label> 
                        <input type="radio" value="option1" id="optionsRadios1" name="optionsRadios6"> Muy buena</label></div>
                        <div><label> 
                        <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios6"> Buena</label></div>
                        <div><label> 
                        <input type="radio" value="option3" id="optionsRadios3" name="optionsRadios6"> Regular</label></div>
                        <div><label> 
                        <input type="radio" value="option4" id="optionsRadios4" name="optionsRadios6"> Mala</label></div>
                         </div>
                     </div>
                                    
                                    </div>
                                </div>
                                
                                <div id="tab-3" class="tab-pane">
                                    <div class="panel-body">
                        <div class="form-group" style="margin-bottom: 130px;">
                        <label class="col-sm-4 control-label">Actividad a la que se dedica actualmente*<br/>
                                    <small class="text-navy"></small></label>

                                    <div class="col-sm-8">
                                        <div><label> <input type="radio" checked="" value="option1" id="actividadRadio1" name="optionsRadios"> Trabaja</label></div>
                                        <div><label> <input type="radio" value="option2" id="actividadRadio2" name="optionsRadios"> Estudia </label></div>
                                            <div><label> <input type="radio" checked="" value="option3" id="actividadRadio3" name="optionsRadios"> Estudia y trabaja </label></div>
                                            <div><label> <input type="radio" checked="" value="option4" id="actividadRadio4" name="optionsRadios"> No estudia ni trabaja</label></div>
                                    </div>
                                </div>
								
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group" style="margin-bottom: 150px;">
                                <label class="col-sm-4 control-label">En caso de estudiar, indicar qué se está estudiando<br/>
                                    <small class="text-navy"></small></label>

                                    <div class="col-sm-8">
                                        <div><label> <input type="radio" checked="" value="option1" id="estudiaRadio1" name="optionsRadios"> Especialidad</label></div>
                                        <div><label> <input type="radio" value="actividadRadio2" id="estudiaRadio2" name="optionsRadios"> Maestría</label></div>
                                            <div><label> <input type="radio" checked="" value="option3" id="estudiaRadio3" name="optionsRadios"> Doctorado </label></div>
                                            <div><label> <input type="radio" checked="" value="option4" id="estudiaRadio4" name="optionsRadios"> Idiomas</label></div>
                                            <div><label> <input type="radio" checked="" value="option5" id="estudiaRadio4" name="optionsRadios"> Otros</label></div>
                                    </div>
                                </div>

								
                                
								<div class="form-group"  style="margin-bottom: 40px;">
                                    <label for="esp_ins">Especialidad/Institución donde se estudia</label>
                                    <input type="text" class="form-control" id="esp_ins" name="esp_ins" >
                                 </div>
                                
                                
                                
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group" style="margin-bottom: 160px;">
                                <label class="col-sm-4 control-label">En caso de trabajar: Tiempo transcurrido para obtener el primer empleo<br/>
                                    <small class="text-navy"></small></label>

                                    <div class="col-sm-8">
                                        <div><label> <input type="radio" checked="" value="option1" id="tiempoRadio1" name="optionsRadios"> Antes de regresar</label></div>
                                        <div><label> <input type="radio" value="actividadRadio2" id="tiempoRadio2" name="optionsRadios"> Menos de seis meses</label></div>
                                            <div><label> <input type="radio" checked="" value="option3" id="tiempoRadio3" name="optionsRadios"> Entre seis meses y un año </label></div>
                                            <div><label> <input type="radio" checked="" value="option4" id="tiempoRadio4" name="optionsRadios"> Más de un año</label></div>
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>
                                <div class="form-group" style="margin-bottom: 160px;">
                                <label class="col-sm-4 control-label">Medio para obtener el empleo<br/>
                                    <small class="text-navy">¿Cómo obtuvo el empleo?</small></label>

                                    <div class="col-sm-8">
                                        <div><label> <input type="checkbox" value=""> Residencias profesionales</label></div>
                                        <div><label> <input type="checkbox" value=""> Bolsa de trabajo del plantel</label></div>
                                        <div><label> <input type="checkbox" value=""> Contactos personales</label></div>
                                        <div><label> <input type="checkbox" value=""> Medios de comunicación</label></div>
                                        <div><label> <input type="checkbox" value=""> Redes sociales</label></div>
                                    </div>
                                </div>
                                
                                <div class="form-group"  style="margin-bottom: 40px;">
                                    <label for="med_emp">Otros</label>
                                    <input type="text" class="form-control" id="med_emp" name="med_emp" >
                                 </div>
                                 
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group" style="margin-bottom: 160px;">
                                <label class="col-sm-4 control-label">Requisitos de contratación<br/>
                                    <small class="text-navy">Requisitos más importantes que le pidió la empresa en la que está trabajando</small></label>

                                    <div class="col-sm-8">
                                        <div><label> <input type="checkbox" value=""> Competencias laborales</label></div>
                                        <div><label> <input type="checkbox" value=""> Título profesional</label></div>
                                        <div><label> <input type="checkbox" value=""> Examen de selección</label></div>
                                        <div><label> <input type="checkbox" value=""> Idioma extranjero</label></div>
                                        <div><label> <input type="checkbox" value="">  Actitudes y habilidades socio-comunicativas (principios y valores)</label></div>
                                        <div><label> <input type="checkbox" value=""> Ninguno</label></div>
                                    </div>
                                </div>
                                <div class="form-group"  style="margin-bottom: 40px;">
                                    <label for="req_con">Otros</label>
                                    <input type="text" class="form-control" id="req_con" name="req_con" >
                                 </div>
                                 
                                <div class="hr-line-dashed"></div>
                                <div class="form-group" style="margin-bottom: 130px;">
                                <label class="col-sm-4 control-label">Idioma que utiliza en su trabajo<br/>
                                    <small class="text-navy">Aparte del español</small></label>

                                    <div class="col-sm-8">
                                        <div><label> <input type="checkbox" value=""> Ninguno</label></div>
                                        <div><label> <input type="checkbox" value=""> Inglés</label></div>
                                        <div><label> <input type="checkbox" value=""> Francés</label></div>
                                        <div><label> <input type="checkbox" value=""> Alemán</label></div>
                                        <div><label> <input type="checkbox" value=""> Japonés</label></div>
                                    </div>
                                </div>
                                <div class="form-group"  style="margin-bottom: 40px;">
                                    <label for="idi_tra">Otros</label>
                                    <input type="text" class="form-control" id="idi_tra" name="idi_tra" >
                                 </div>

                                <div class="hr-line-dashed"></div>
                                <div class="form-group" style="margin-bottom: 320px;">
                                <label class="col-sm-4 control-label">En qué proporción utiliza en el desempeño de sus actividades laborales cada una de las habilidades del idioma extranjero</label>

                                    <div class="col-sm-8"><label>Hablar</label><select class="form-control m-b" name="account">
                                        <option>20</option>
                                        <option>40</option>
                                        <option>60</option>
                                        <option>80</option>
                                        <option>100</option>
                                    </select>
                                    </div>
                                    <div class="col-sm-8"><label>Escribir</label><select class="form-control m-b" name="account">
                                        <option>20</option>
                                        <option>40</option>
                                        <option>60</option>
                                        <option>80</option>
                                        <option>100</option>
                                    </select>
                                    </div>
                                    <label class="col-sm-4 control-label"></label>
                                    <div class="col-sm-8"><label>Leer</label><select class="form-control m-b" name="account">
                                        <option>20</option>
                                        <option>40</option>
                                        <option>60</option>
                                        <option>80</option>
                                        <option>100</option>
                                    </select>
                                    </div>
                                    <label class="col-sm-4 control-label"></label>
                                    <div class="col-sm-8"><label>Escuchar</label><select class="form-control m-b" name="account">
                                        <option>20</option>
                                        <option>40</option>
                                        <option>60</option>
                                        <option>80</option>
                                        <option>100</option>
                                    </select>
                                    </div>
                                </div>
                               
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group" style="margin-bottom: 130px;">
                                <label class="col-sm-4 control-label">Antiguedad en el empleo<br/>
                                    <small class="text-navy"></small></label>

                                    <div class="col-sm-8">
                                        <div><label> <input type="radio" value="option1" id="antiguedadRadio1" name="optionsRadios"> Menos de seis meses</label></div>
                                        <div><label> <input type="radio" value="actividadRadio2" id="antiguedadRadio2" name="optionsRadios"> Un año</label></div>
                                            <div><label> <input type="radio" value="option3" id="antiguedadRadio3" name="optionsRadios"> Dos años </label></div>
                                            <div><label> <input type="radio" value="option4" id="antiguedadRadio4" name="optionsRadios"> Tres años</label></div>
                                            <div><label> <input type="radio" value="option4" id="antiguedadRadio5" name="optionsRadios"> Más de tres años</label></div>
                                    </div>
                                </div>
                                <div class="form-group"  style="margin-bottom: 40px;">
                                    <label for="ant_emp">Otros</label>
                                    <input type="text" class="form-control" id="ant_emp" name="ant_emp" >
                                 </div>
                                 <div class="hr-line-dashed"></div>
                                 
                                 
                                 <div class="form-group" style="margin-bottom: 130px;">
                                <label class="col-sm-4 control-label">Ingreso(salario mínimo diario)<br/>
                                    <small class="text-navy"></small></label>

                                    <div class="col-sm-8">
                                <div>
                                  <label>
                                    <input type="radio" name="optionsIngreso" id="optionsIngreso1" value="Ingreso1" >
                                Menos de $5000
                                  </label>
                                </div>
                                <div>
                                  <label>
                                    <input type="radio" name="optionsIngreso" id="optionsIngreso2" value="Ingreso2" >
                                Entre $5000 y $7000
                                  </label>
                                </div>
                                <div>
                                  <label>
                                    <input type="radio" name="optionsIngreso" id="optionsIngreso3" value="Ingreso3" >
                                Entre $8000 y $10000
                                  </label>
                                </div>
                                <div>
                                  <label>
                                    <input type="radio" name="optionsIngreso" id="optionsIngreso4" value="Ingreso4" >
                                    Más de $10000
                                  </label>
                                </div>
                                </div>
                                </div>
                                
<div class="hr-line-dashed"></div>

								<div class="form-group" style="margin-bottom: 185px;">
                                <label class="col-sm-4 control-label">Nivel jerárquico en el trabajo<br/>
                                    <small class="text-navy"></small></label>

                                    <div class="col-sm-8">
                                    <div>
                                      <label>
                                        <input type="radio" name="optionsNivel" id="optionsNivel1" value="Nivel1" >
                                    Técnico
                                      </label>
                                    </div>
                                    <div>
                                      <label>
                                        <input type="radio" name="optionsNivel" id="optionsNivel2" value="Nivel2" >
                                    Supervisor
                                      </label>
                                    </div>
                                    <div>
                                      <label>
                                        <input type="radio" name="optionsNivel" id="optionsNivel3" value="Nivel3" >
                                    Jefe de área
                                      </label>
                                    </div>
                                    <div>
                                      <label>
                                        <input type="radio" name="optionsNivel" id="optionsNivel4" value="Nivel4" >
                                        Funcionario
                                      </label>
                                    </div>
                                    <div>
                                      <label>
                                        <input type="radio" name="optionsNivel" id="optionsNivel5" value="Nivel5" >
                                        Directivo
                                      </label>
                                    </div>
                                    <div>
                                      <label>
                                        <input type="radio" name="optionsNivel" id="optionsNivel7" value="Nivel7" >
                                        Empresario
                                      </label>
                                    </div>
                                    </div>
                                    </div>

<div class="hr-line-dashed"></div>

								<div class="form-group" style="margin-bottom: 130px;">
                                <label class="col-sm-4 control-label">Condiciones de trabajo<br/>
                                    <small class="text-navy">Su contrato de trabajo es:</small></label>

                                    <div class="col-sm-8">
 
                                    <div>
                                      <label>
                                        <input type="radio" name="optionsCondiciones" id="optionsCondiciones1" value="Condicion1" >
                                    Base
                                      </label>
                                    </div>
                                    <div>
                                      <label>
                                        <input type="radio" name="optionsCondiciones" id="optionsCondiciones2" value="Condicion2" >
                                    Eventual
                                      </label>
                                    </div>
                                    <div>
                                      <label>
                                        <input type="radio" name="optionsCondiciones" id="optionsCondiciones3" value="Condicion3" >
                                    Contrato
                                      </label>
                                    </div>
                                    
                                    </div>
                                    </div>
                                    <div class="form-group"  style="margin-bottom: 40px;">
                                        <label for="con_tra">Otro</label>
                                        <input type="text" class="form-control" id="con_tra" name="con_tra" >
                                     </div>
                                    
<div class="hr-line-dashed"></div>
								<div class="form-group" style="margin-bottom: 180px;">
                                <label class="col-sm-4 control-label">Relación del trabajo con su área de formación<br/>
                                    <small class="text-navy">En qué porcentaje se relaciona tu formación académica con tu trabajo</small></label>

                                    <div class="col-sm-8">
                                    <div>
                                      <label>
                                        <input type="radio" name="optionsRelacion" id="optionsRelacion1" value="Relacion1" >
                                    0%
                                      </label>
                                    </div>
                                     <div>
                                      <label>
                                        <input type="radio" name="optionsRelacion" id="optionsRelacion2" value="Relacion2" >
                                    20%
                                      </label>
                                    </div>
                                    <div>
                                      <label>
                                        <input type="radio" name="optionsRelacion" id="optionsRelacion3" value="Relacion3" >
                                    40%
                                      </label>
                                    </div>
                                    <div>
                                      <label>
                                        <input type="radio" name="optionsRelacion" id="optionsRelacion4" value="Relacion4" >
                                    60%
                                      </label>
                                    </div>
                                    <div>
                                      <label>
                                        <input type="radio" name="optionsRelacion" id="optionsRelacion5" value="Relacion5" >
                                    80%
                                      </label>
                                    </div>
                                    <div>
                                      <label>
                                        <input type="radio" name="optionsRelacion" id="optionsRelacion6" value="Relacion6" >
                                    100%
                                      </label>
                                    </div>
                                    </div>
                                    </div>

<div class="hr-line-dashed"></div>

 <label for="tema5">12.- Datos de la empresa</label>
    <footer>Empresa:</footer>
  <div class="checkbox">
  <label>
    <input type="checkbox" value="">
    Pública
  </label>
</div>  
 <div class="checkbox">
  <label>
    <input type="checkbox" value="">
    Privada
  </label>
   <div class="checkbox">
  <label>
    <input type="checkbox" value="">
    Social
  </label>
  </div>
  <p></p>
<label for="subtema1">Giro o actividad principal de la empresa</label>
<div><input type="text" class="form-control" placeholder="Escribir actividad"></div>
<p></p>
<label for="subtema2">Razón social</label>
<div><input type="text" class="form-control"></div>
<p></p>
<label for="subtema3">Domicilio</label>
<div><input type="text" class="form-control" placeholder="Ciudad"></div>
<p></p>
<div><input type="text" class="form-control" placeholder="Municipio"></div>
<p></p>
<div><input type="text" class="form-control" placeholder="Estado"></div>
<p></p>
<div><input type="text" class="form-control" placeholder="Calle"></div>
<p></p>
<div><input type="text" class="form-control" placeholder="Número de casa"></div>
<p></p>
<div><input type="text" class="form-control" placeholder="Colonia"></div>
<p></p>
<div><input type="text" class="form-control" placeholder="Código postal"></div>
<p></p>
<div><input type="text" class="form-control" placeholder="Teléfono"></div>
<p></p>
<label for="subtema4">Página web</label>
<div><input type="text" class="form-control" placeholder="Escribir URL"></div>
<p></p>
<label for="subtema5">Nombre y puesto del jefe inmediato</label>
<div><input type="text" class="form-control" placeholder="Escribir nombre"></div>
<p></p>
<input type="text" class="form-control" placeholder="Escribir puesto"></div>

<div class="hr-line-dashed"></div>

   <label for="tema6">13.- Sector económico de la Empresa u Organización</label>
<p></p>
<label for="subtema6">Sector primario</label>
<div class="radio">
  <label>
    <input type="radio" name="optionsSectorPrimario" id="optionsPrimario1" value="Primario1" >
Agroindustria
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsSectorPrimario" id="optionsPrimario2" value="Primario2" >
Pesquero
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsSectorPrimario" id="optionsPrimario3" value="Primario3" >
Minero
  </label>
</div>
<label for="subtema">Otro</label>
<div><input type="text" class="form-control" placeholder="Escribe otro sector"></div>
<p></p>
<label for="subtema6">Sector secundario</label>
<div class="radio">
  <label>
    <input type="radio" name="optionsSectorSecundario" id="optionsSecundario1" value="Secundario1" >
Industrial
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsSectorSecundario" id="optionsSecundario2" value="Secundario2" >
Construcción
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsSectorSecundario" id="optionsSecundario3" value="Secundario3" >
Petrolero
  </label>
</div>
<label for="subtema">Otro</label>
<div><input type="text" class="form-control" placeholder="Escribe otro sector"></div>
<p></p>
<label for="subtema7">Sector terciario</label>
<div class="radio">
  <label>
    <input type="radio" name="optionsSectorTerciario" id="optionsTerciario1" value="Terciario1" >
Educativo
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsSectorTerciario" id="optionsTerciario2" value="Terciario2" >

Turismo
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsSectorTerciario" id="optionsTerciario3" value="Terciario3" >
Comercio
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsSectorTerciario" id="optionsTerciario4" value="Terciario4" >
Servicios Financieros
  </label>
</div>
<label for="subtema">Otro</label>
<div><input type="text" class="form-control" placeholder="Escribe otro sector"></div>

<div class="hr-line-dashed"></div>

  <label for="tema7">13.- Tamaño de la Empresa u Organización</label>
<div class="radio">
  <label>
    <input type="radio" name="optionsTamaño" id="optionsTamaño1" value="Tamaño1" >
Microempresa (1-30)
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsTamaño" id="optionsTamaño2" value="Tamaño2" >
Pequeña (31-100)
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsTamaño" id="optionsTamaño3" value="Tamaño3" >
Mediana (101-500)
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsTamaño" id="optionsTamaño4" value="Tamaño4" >
Grande (más de 500)
  </label>
</div>


                               
                                    </div>
                                </div>
                                
                                <div id="tab-4" class="tab-pane">
                                    <div class="panel-body">
                                  
                               <div class="ss-section-description ss-no-ignore-whitespace">(Coherencia entre la formación y el tipo de empleo)</div>
<div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-radio"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_2006067452"><div class="ss-q-title">Marcar los campos que correspondan a su trayectoria profesional
</div>
<div class="ss-q-help ss-secondary-text" dir="auto">IV. 1 Eficiencia para realizar las actividades laborales, en relación con su formación académica</div></label>


<ul class="ss-choices" role="radiogroup" aria-label="Marcar los campos que correspondan a su trayectoria profesional IV. 1 Eficiencia para realizar las actividades laborales, en relación con su formación académica "><li class="ss-choice-item">
<label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1000086" value="Muy eficiente" id="group_1000086_1" role="radio" class="ss-q-radio" aria-label="Muy eficiente"></span>
<span class="ss-choice-label">Muy eficiente</span>
</label></li> <li class="ss-choice-item">
<label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1000086" value="Eficiente" id="group_1000086_2" role="radio" class="ss-q-radio" aria-label="Eficiente"></span>
<span class="ss-choice-label">Eficiente</span>
</label></li> <li class="ss-choice-item">
<label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1000086" value="Poco eficiente" id="group_1000086_3" role="radio" class="ss-q-radio" aria-label="Poco eficiente"></span>
<span class="ss-choice-label">Poco eficiente</span>
</label></li> <li class="ss-choice-item">
<label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1000086" value="Deficiente" id="group_1000086_4" role="radio" class="ss-q-radio" aria-label="Deficiente"></span>
<span class="ss-choice-label">Deficiente</span>
</label></li></ul>
<div class="error-message" id="2006067452_errorMessage"></div>
<div class="required-message">Esta pregunta es obligatoria.</div></div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-radio"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1062075031"><div class="ss-q-title">IV.2 Cómo califica su formación académica con respecto a su desempeño laboral
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>


<ul class="ss-choices" role="radiogroup" aria-label="IV.2 Cómo califica su formación académica con respecto a su desempeño laboral  "><li class="ss-choice-item">
<label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1000052" value="Excelente" id="group_1000052_1" role="radio" class="ss-q-radio" aria-label="Excelente"></span>
<span class="ss-choice-label">Excelente</span>
</label></li> <li class="ss-choice-item">
<label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1000052" value="Bueno" id="group_1000052_2" role="radio" class="ss-q-radio" aria-label="Bueno"></span>
<span class="ss-choice-label">Bueno</span>
</label></li> <li class="ss-choice-item">
<label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1000052" value="Regular" id="group_1000052_3" role="radio" class="ss-q-radio" aria-label="Regular"></span>
<span class="ss-choice-label">Regular</span>
</label></li> <li class="ss-choice-item">
<label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1000052" value="Malo" id="group_1000052_4" role="radio" class="ss-q-radio" aria-label="Malo"></span>
<span class="ss-choice-label">Malo</span>
</label></li> <li class="ss-choice-item">
<label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1000052" value="P&eacute;simo" id="group_1000052_5" role="radio" class="ss-q-radio" aria-label="P&eacute;simo"></span>
<span class="ss-choice-label">Pésimo</span>
</label></li></ul>
<div class="error-message" id="1062075031_errorMessage"></div>
<div class="required-message">Esta pregunta es obligatoria.</div></div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-radio"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_760735753"><div class="ss-q-title">IV.3 Utilidad de las residencias profesionales o prácticas profesionales para su desarrollo laboral y profesional
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>


<ul class="ss-choices" role="radiogroup" aria-label="IV.3 Utilidad de las residencias profesionales o prácticas profesionales para su desarrollo laboral y profesional  "><li class="ss-choice-item">
<label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1000053" value="Excelente" id="group_1000053_1" role="radio" class="ss-q-radio" aria-label="Excelente"></span>
<span class="ss-choice-label">Excelente</span>
</label></li> <li class="ss-choice-item">
<label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1000053" value="Bueno" id="group_1000053_2" role="radio" class="ss-q-radio" aria-label="Bueno"></span>
<span class="ss-choice-label">Bueno</span>
</label></li> <li class="ss-choice-item">
<label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1000053" value="Regular" id="group_1000053_3" role="radio" class="ss-q-radio" aria-label="Regular"></span>
<span class="ss-choice-label">Regular</span>
</label></li> <li class="ss-choice-item">
<label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1000053" value="Malo" id="group_1000053_4" role="radio" class="ss-q-radio" aria-label="Malo"></span>
<span class="ss-choice-label">Malo</span>
</label></li> <li class="ss-choice-item">
<label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1000053" value="P&eacute;simo" id="group_1000053_5" role="radio" class="ss-q-radio" aria-label="P&eacute;simo"></span>
<span class="ss-choice-label">Pésimo</span>
</label></li></ul>
<div class="error-message" id="760735753_errorMessage"></div>
<div class="required-message">Esta pregunta es obligatoria.</div></div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-grid"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_102347253"><div class="ss-q-title">IV.4 Aspectos que valora la empresa u organismo para la contratación de egresados
</div>
<div class="ss-q-help ss-secondary-text" dir="auto">                                                                                                                                       1 Poco      5 Mucho</div></label>

<div>
<table border="0" cellpadding="5" cellspacing="0"><thead><tr><td class="ss-gridnumbers ss-gridrow-leftlabel"></td>
<td class="ss-gridnumbers" style="width: 16%;"><label class="ss-gridnumber">1</label></td> <td class="ss-gridnumbers" style="width: 16%;"><label class="ss-gridnumber">2</label></td> <td class="ss-gridnumbers" style="width: 16%;"><label class="ss-gridnumber">3</label></td> <td class="ss-gridnumbers" style="width: 16%;"><label class="ss-gridnumber">4</label></td> <td class="ss-gridnumbers" style="width: 16%;"><label class="ss-gridnumber">5</label></td></tr></thead>
<tbody><tr role="radiogroup" aria-label="&Aacute;rea o Campo de Estudio" aria-describedby="102347253_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel">Área o Campo de Estudio</td>
<td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000054" value="1" id="group_1000054_1" role="radio" class="ss-q-radio" aria-label="1"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000054" value="2" id="group_1000054_2" role="radio" class="ss-q-radio" aria-label="2"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000054" value="3" id="group_1000054_3" role="radio" class="ss-q-radio" aria-label="3"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000054" value="4" id="group_1000054_4" role="radio" class="ss-q-radio" aria-label="4"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000054" value="5" id="group_1000054_5" role="radio" class="ss-q-radio" aria-label="5"></div></label></td></tr> <tr role="radiogroup" aria-label="Titulaci&oacute;n" aria-describedby="102347253_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel">Titulación</td>
<td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000055" value="1" id="group_1000055_1" role="radio" class="ss-q-radio" aria-label="1"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000055" value="2" id="group_1000055_2" role="radio" class="ss-q-radio" aria-label="2"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000055" value="3" id="group_1000055_3" role="radio" class="ss-q-radio" aria-label="3"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000055" value="4" id="group_1000055_4" role="radio" class="ss-q-radio" aria-label="4"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000055" value="5" id="group_1000055_5" role="radio" class="ss-q-radio" aria-label="5"></div></label></td></tr> <tr role="radiogroup" aria-label="Experiencia Laboral/pr&aacute;ctica (antes de egresar)" aria-describedby="102347253_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel">Experiencia Laboral/práctica (antes de egresar)</td>
<td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000056" value="1" id="group_1000056_1" role="radio" class="ss-q-radio" aria-label="1"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000056" value="2" id="group_1000056_2" role="radio" class="ss-q-radio" aria-label="2"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000056" value="3" id="group_1000056_3" role="radio" class="ss-q-radio" aria-label="3"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000056" value="4" id="group_1000056_4" role="radio" class="ss-q-radio" aria-label="4"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000056" value="5" id="group_1000056_5" role="radio" class="ss-q-radio" aria-label="5"></div></label></td></tr> <tr role="radiogroup" aria-label="Competencia Laboral: Habilidad para resolver problemas, capacidad de an&aacute;lisis, habilidad para el aprendizaje, creatividad, administraci&oacute;n del tiempo, capacidad de negociaci&oacute;n, habilidades manuales, trabajo en equipo, iniciativa, honestidad, persistencia, etc." aria-describedby="102347253_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel">Competencia Laboral: Habilidad para resolver problemas, capacidad de análisis, habilidad para el aprendizaje, creatividad, administración del tiempo, capacidad de negociación, habilidades manuales, trabajo en equipo, iniciativa, honestidad, persistencia, etc.</td>
<td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000057" value="1" id="group_1000057_1" role="radio" class="ss-q-radio" aria-label="1"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000057" value="2" id="group_1000057_2" role="radio" class="ss-q-radio" aria-label="2"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000057" value="3" id="group_1000057_3" role="radio" class="ss-q-radio" aria-label="3"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000057" value="4" id="group_1000057_4" role="radio" class="ss-q-radio" aria-label="4"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000057" value="5" id="group_1000057_5" role="radio" class="ss-q-radio" aria-label="5"></div></label></td></tr> <tr role="radiogroup" aria-label="Posicionamiento de la Instituci&oacute;n de Egreso" aria-describedby="102347253_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel">Posicionamiento de la Institución de Egreso</td>
<td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000058" value="1" id="group_1000058_1" role="radio" class="ss-q-radio" aria-label="1"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000058" value="2" id="group_1000058_2" role="radio" class="ss-q-radio" aria-label="2"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000058" value="3" id="group_1000058_3" role="radio" class="ss-q-radio" aria-label="3"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000058" value="4" id="group_1000058_4" role="radio" class="ss-q-radio" aria-label="4"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000058" value="5" id="group_1000058_5" role="radio" class="ss-q-radio" aria-label="5"></div></label></td></tr> <tr role="radiogroup" aria-label="Conocimiento de idiomas extranjeros" aria-describedby="102347253_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel">Conocimiento de idiomas extranjeros</td>
<td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000059" value="1" id="group_1000059_1" role="radio" class="ss-q-radio" aria-label="1"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000059" value="2" id="group_1000059_2" role="radio" class="ss-q-radio" aria-label="2"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000059" value="3" id="group_1000059_3" role="radio" class="ss-q-radio" aria-label="3"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000059" value="4" id="group_1000059_4" role="radio" class="ss-q-radio" aria-label="4"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000059" value="5" id="group_1000059_5" role="radio" class="ss-q-radio" aria-label="5"></div></label></td></tr> <tr role="radiogroup" aria-label="Recomendaciones/referencias" aria-describedby="102347253_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel">Recomendaciones/referencias</td>
<td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000060" value="1" id="group_1000060_1" role="radio" class="ss-q-radio" aria-label="1"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000060" value="2" id="group_1000060_2" role="radio" class="ss-q-radio" aria-label="2"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000060" value="3" id="group_1000060_3" role="radio" class="ss-q-radio" aria-label="3"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000060" value="4" id="group_1000060_4" role="radio" class="ss-q-radio" aria-label="4"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000060" value="5" id="group_1000060_5" role="radio" class="ss-q-radio" aria-label="5"></div></label></td></tr> <tr role="radiogroup" aria-label="Personalidad/actitudes" aria-describedby="102347253_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel">Personalidad/actitudes</td>
<td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000061" value="1" id="group_1000061_1" role="radio" class="ss-q-radio" aria-label="1"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000061" value="2" id="group_1000061_2" role="radio" class="ss-q-radio" aria-label="2"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000061" value="3" id="group_1000061_3" role="radio" class="ss-q-radio" aria-label="3"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000061" value="4" id="group_1000061_4" role="radio" class="ss-q-radio" aria-label="4"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000061" value="5" id="group_1000061_5" role="radio" class="ss-q-radio" aria-label="5"></div></label></td></tr> <tr role="radiogroup" aria-label="Capacidad de liderazgo" aria-describedby="102347253_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel">Capacidad de liderazgo</td>
<td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000062" value="1" id="group_1000062_1" role="radio" class="ss-q-radio" aria-label="1"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000062" value="2" id="group_1000062_2" role="radio" class="ss-q-radio" aria-label="2"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000062" value="3" id="group_1000062_3" role="radio" class="ss-q-radio" aria-label="3"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000062" value="4" id="group_1000062_4" role="radio" class="ss-q-radio" aria-label="4"></div></label></td> <td class="ss-gridrow" style="width: 16%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper ss-grid-cell"><input type="radio" name="entry.1000062" value="5" id="group_1000062_5" role="radio" class="ss-q-radio" aria-label="5"></div></label></td></tr></tbody></table>
<div class="error-message" id="102347253_errorMessage"></div>
<div class="required-message">Escribe una respuesta por fila</div></div></div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1000102"><div class="ss-q-title">
</div>
<div class="ss-q-help ss-secondary-text" dir="auto">Mencione que otros aspectos valora la empresa</div></label>   
                               
                               </div></div></div>
                                    </div>
                                </div>
                                
                                <div id="tab-5" class="tab-pane">
                                    <div class="panel-body">
                                  
                                    </div>
                                </div>
                                
                                <div id="tab-6" class="tab-pane">
                                    <div class="panel-body">
                                  
                                    </div>
                                </div>
                                
                                <div id="tab-7" class="tab-pane">
                                    <div class="panel-body">
                   <button type="submit" class="btn btn-primary" style="float:right">Registrarme</button>
                                    </div>
                                </div>
                                
                            </div>
				</form>
                        </div>

                    </div>
