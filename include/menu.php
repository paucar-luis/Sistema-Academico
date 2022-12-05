        
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span class="h4">Sistema Académico</span></a>
            </div>

            <div class="clearfix"></div>

            <?php
            $buscar_usu_docente_sesion = buscarUsuarioDocenteById($conexion, $_SESSION['id_usu_sisacad_iesthuanta']);
            $res_b_u_s = mysqli_fetch_array($buscar_usu_docente_sesion);
            $id_d_b_S = $res_b_u_s['id_docente'];
            $buscar_docente_sesion = buscarDocenteById($conexion, $id_d_b_S);
            $res_b_d_s = mysqli_fetch_array($buscar_docente_sesion);
            ?>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="Gentella/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2><?php echo $res_b_d_s['apellidos_nombres']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Inicio </a>

                  </li>
                  <li><a><i class="fa fa-edit"></i> Datos Institucionales <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="datos_institucionales.php">Datos Institucionales</a></li>
                      <li><a href="periodo_academico.php">Periodo Académico</a></li>
                      <li><a href="presente_per_acad.php">Presente Periodo Académico</a></li>
                      <li><a href="programa_estudios.php">Programa de Estudios</a></li>
                      <li><a href="modulo_formativo.php">Modulos formativos</a></li>
                      <li><a href="semestre.php">Semestre</a></li>
                      <li><a href="unidad_didactica.php">Unidades didacticas</a></li>
                      <li><a href="cargo.php">Cargo</a></li>
                      <li><a href="genero.php">Género</a></li>
                      <li><a href="condicion.php">Condición</a></li>
                    </ul>
                  </li>
                  <!--<li><a><i class="fa fa-desktop"></i> Programación Académica <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="prog_ud.php">Programación de Unidades Didacticas</a></li>
                      <li><a href="matricula.php"> Matrícula</a></li>
                      <li><a href="calificacion.php"> Calificaciones</a></li>
                      <li><a href="condicion.php"> Condición</a></li>
                    </ul>
                  </li>-->
                  <li><a><i class="fa fa-desktop"></i> Docentes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="docentes.php">Docente</a></li>
                      <li><a href="usuarios_docentes.php">Usuarios Docentes</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-book"></i> Estudiantes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="estudiantes.php">Estudiante</a></li>
                      <li><a href="usuario_estudiantes.php">Usuarios Estudiante</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="Gentella/production/images/img.jpg" alt=""><?php echo $res_b_d_s['apellidos_nombres']; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;">Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="operaciones/cerrar_sesion.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <p href="javascript:;" class="dropdown-toggle info-number px-2" data-toggle="dropdown" aria-expanded="false">
                  </p>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->