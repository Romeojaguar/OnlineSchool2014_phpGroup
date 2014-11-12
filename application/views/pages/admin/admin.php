                    <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div  class="modal-dialog ">
                                <div class="modal-content">

                                      <form  role="form" method="post" action="addingus" name="form">

                                          <div id="registeruser">

                                              <div class="header">

                                                  <h1>Добавить нового пользователя<h1>
                                              </div>
                                              <div id="cbxuregister">

                                                      <div class="chk"><label class="radio-inline" ><input type="radio" name="radio" value="teach" > <span class="kalapaarida">Ученик </span></label></div>
                                                      <div class="chkb"><label class="radio-inline"><input type="radio" name="radio" value="pupil" ><span class="kalapaarida">Учитель</span></label></div>

                                              </div>
                                              <div class="rgstrcntr">

                                                  <input type="submit"  name='rdbtn' class="buttonregistr" value="Создать">

                                              </div>
                                          </div>
                                      </form>
                                </div>
                          </div>
                    </div>
                    <div class="modal fade " id="myreguser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div  class="modal-dialog ">
                            <div class="modal-content">

                                <form  role="form" method="post" action="admin/addingus" name="form">

                                    <div id="registeruser">

                                        <div class="header">


                                        </div>
                                        <div id="cbxclassregister">

                                        <h1>Добавление расписание для класса <select id="styledSelect" class="form-control right" style=" margin-top: 8px;width: 11%;">
                                                <option>231</option>
                                                <option>123</option>
                                            </select></h1>

                                        </div>
                                        <div class="rgstrcntr">

                                            <input type="submit"  name='rdbtn' class="buttonregistr" value="Добавить">

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="alala">
                          <div id="admin_txt">

                              <ul>

                                  <a href="#myModal" role="button" data-toggle="modal"><li>Регистрация нового пользователя</li></a>

                                  <a href="admin/regusers" ><li> Зарегистрированные пользователи</li></a>
                              </ul>

                          </div>

                         <div id="admin_txt_t">
                                  <ul>
                                      <li class="cllaaaa">Расписание занятий</li>
                                      <a href="#myreguser" role="button" data-toggle="modal"> <li class="clssss"> Добавление нового расписания</li></a>
                                      <li class="clssss"> Просмотр расписания</li>

                                  </ul>

                          </div>
                     </div>
