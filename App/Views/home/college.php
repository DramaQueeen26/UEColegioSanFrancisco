<!-- Lugar de la página -->
<div class="wrapper col2">
  <div id="breadcrumb">
    <ul>
      <li class="first">Estas aquí</li>
      <li>&#187;</li>
      <li><a href="#">Inicio</a></li>
      <li>&#187;</li>
      <li><a href="#">Colegio</a></li>
    </ul>
  </div>
</div>

<!-- Historia -->
<div class="wrapper col3">
  <div id="container">
    <div id="content">
      <h1>Nuestra historia</h1>
      <img class="imgr" src="<?=$baseUrl?>images/JoseMaria.png" alt="" width="125" height="125" />
      <p>Aliquatjusto quisque nam consequat doloreet vest orna partur scetur portortis nam. Metadipiscing eget facilis elit sagittis felisi eger id justo maurisus convallicitur.</p>
      <p>Dapiensociis et curabitur condis lorem loborttis leo. Ipsumcommodo libero nunc at in velis tincidunt pellentum tincidunt vel lorem.</p>
      <img class="imgl" src="<?=$baseUrl?>images/salon.jpg" alt="" width="125" height="125" />
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum provident assumenda perspiciatis amet, adipisci ut expedita excepturi rem modi. Nostrum facere voluptate similique repudiandae natus illo accusantium eligendi dolorem odio.</p>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur ipsa ducimus inventore omnis, maiores odio veniam, tempora temporibus porro nihil iste nam dignissimos placeat laborum neque molestias veritatis laboriosam molestiae.</p>
      <p>Portortornec condimenterdum eget consectetuer condis consequam pretium pellus sed mauris enim. Puruselit mauris nulla hendimentesque elit semper nam a sapien urna sempus.</p>
      <br>
      <!-- Una tabla 
      <h2>Table(s)</h2>
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th>Header 1</th>
            <th>Header 2</th>
            <th>Header 3</th>
            <th>Header 4</th>
          </tr>
        </thead>
        <tbody>
          <tr class="light">
            <td>Value 1</td>
            <td>Value 2</td>
            <td>Value 3</td>
            <td>Value 4</td>
          </tr>
          <tr class="dark">
            <td>Value 5</td>
            <td>Value 6</td>
            <td>Value 7</td>
            <td>Value 8</td>
          </tr>
          <tr class="light">
            <td>Value 9</td>
            <td>Value 10</td>
            <td>Value 11</td>
            <td>Value 12</td>
          </tr>
          <tr class="dark">
            <td>Value 13</td>
            <td>Value 14</td>
            <td>Value 15</td>
            <td>Value 16</td>
          </tr>
        </tbody>
      </table>
    -->

    <!-- Comentarios-->

      <div id="comments">
        <h2>Comentarios</h2>
        <ul class="commentlist">
          <li class="comment_odd">
            <div class="author"><img class="avatar" src="<?=$baseUrl?>images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#">Un nombre</a></span> <span class="wrote">Escribe:</span></div>
            <div class="submitdate"><a href="#">Marzo 28, 2022 - 8:35 am</a></div>
            <p>Excelente institucion</p>
          </li>
          <li class="comment_even">
            <div class="author"><img class="avatar" src="<?=$baseUrl?>images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#">Un nombre</a></span> <span class="wrote">Escribe:</span></div>
            <div class="submitdate"><a href="#">Marzo 28, 2022 - 8:35 am</a></div>
            <p>Excelentes profesores, todos comprometidos con el aprendizaje de los niños </p>
          </li>
          <li class="comment_odd">
            <div class="author"><img class="avatar" src="<?=$baseUrl?>images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#">Un nombre</a></span> <span class="wrote">Escribe:</span></div>
            <div class="submitdate"><a href="#">Marzo 28, 2022 - 8:35 am</a></div>
            <p>¡Esperando el regreso a clases!</p>
          </li>
        </ul>
      </div>
      <h2>Escribe un comentario</h2>
      <div id="respond">
        <form action="#" method="post">
          <p>
            <input type="text" name="name" id="name" value="" size="22" />
            <label for="name"><small>Nombre</small></label>
          </p>
          <p>
            <input type="text" name="email" id="email" value="" size="22" />
            <label for="email"><small>E-Mail</small></label>
          </p>
          <p>
            <textarea name="comment" id="comment" cols="100%" rows="10"></textarea>
            <label for="comment" style="display:none;"><small></small></label>
          </p>
          <p>
            <input name="submit" type="submit" id="submit" value="Subir comentario" />
            &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Borrar" />
          </p>
        </form>
      </div>
    </div>
    
    <!-- Columna derecha Navegación -->
    <div id="column">

      <!--subnavegacion
      <div class="subnav">
        <h2>Secondary Navigation</h2>
        <ul>
          <li><a href="#">Navigation - Level 1</a></li>
          <li><a href="#">Navigation - Level 1</a>
            <ul>
              <li><a href="#">Navigation - Level 2</a></li>
              <li><a href="#">Navigation - Level 2</a></li>
            </ul>
          </li>
          <li><a href="#">Navigation - Level 1</a>
            <ul>
              <li><a href="#">Navigation - Level 2</a></li>
              <li><a href="#">Navigation - Level 2</a>
                <ul>
                  <li><a href="#">Navigation - Level 3</a></li>
                  <li><a href="#">Navigation - Level 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">Navigation - Level 1</a></li>
        </ul>
      </div>
      -->

      <div class="holder">
        <h2 class="title"><img src="<?=$baseUrl?>images/reinscripciones60x60.jpg" alt="" />Reinscripciones</h2>
        <p> Las reinscripciones para el año academico 2021-2022 serán a partir de septiembre 23 en nuestras instituciones academicas</p>
        <p class="readmore"><a href="#">Continuar leyendo &raquo;</a></p>
      </div>
      <div id="featured">
        <ul>
          <li>
            <h2>Conoce más de Fe y Alegría</h2>
            <p class="imgholder"><img src="<?=$baseUrl?>images/recreofeyalegria.jpg" alt="" /></p>
            <p>Fe y Alegría es un Movimiento de Educación Popular y Promoción Social, nacido el 5 de marzo de 1955 en el 23 de Enero de Caracas, Venezuela. Hoy está presente en 22 países de América Latina, África y Europa.  Allí atiende a más de 1.500.000 niños,niñas, jóvenes y adultos de sectores urbanos, rurales e indígenas con una gran variedad de programas educativos, comunitarios y de capacitación humana y laboral.</p>
            <p class="readmore"><a href="http://www.feyalegria.edu.ve/">Continuar &raquo;</a></p>
          </li>
        </ul>
      </div>

      <!-- 
      <div class="holder">
        <h2>Lorem ipsum dolor</h2>
        <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
        <ul>
          <li><a href="#">Lorem ipsum dolor sit</a></li>
          <li>Etiam vel sapien et</li>
          <li><a href="#">Etiam vel sapien et</a></li>
        </ul>
        <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed. Condimentumsantincidunt dui mattis magna intesque purus orci augue lor nibh.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
      -->
      
    </div>
    <div class="clear"></div>
  </div>
  
</div>