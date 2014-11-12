<style>
    #commentForm {
width: 500px;
}
#commentForm label {
width: 250px;
}
#commentForm label.error, #commentForm input.submit {
margin-left: 253px;
}
#signupForm {
width: 670px;
}
#signupForm label.error {
margin-right: -145%;
float: right;
display: inline;

}
#newsletter_topics label.error {
display: none;
margin-left: 103px;
}
</style>
<script>
    $.validator.setDefaults({
        submitHandler: function() {
            alert("submitted!");
        }
    });

    $().ready(function() {
        // validate signup form on keyup and submit
        $("#signupForm").validate({
            rules: {
                f: "required",
                i: "required",
                o: {
                    required: true,
                    minlength: 3
                },
                password: {
                    required: true,
                    minlength: 5
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                email: {
                    required: true,
                    email: true
                },
                datebirth:{required:true},

                login:{
                    required:true,
                    minlength: 3
                },
                address:{required:true}
            },
            messages: {
                f: "Please enter your firstname",
                i: "Please enter your lastname",
                o: {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 2 characters"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                confirm_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long",
                    equalTo: "Please enter the same password as above"
                },
                email: "Please enter a valid email address",
                datebirth:{required:'kalaparida'},
                address:{required:'ajina'},
                login:{required:'asdasdasdasdasdasdasd'}
            }
        });

        // propose username by combining first- and lastname
        $("#i").focus(function() {
            var f = $("#f").val();
            var o = $("#o").val();
            if (f && o && !this.value) {
                this.value = f + "." + o;
            }
        });

        //code to hide topic selection, disable for demo
    });
</script>
                          <div class="container">
                             <div class="row">
                               <div id="admin_addus">
                                <div class="span12">
                                      <form class="form-horizontal"  id="signupForm" role="form">
                                           <label class="align">Логин  <input type="text" name="login" class="form-control right" id="login" placeholder=" "></label>
                                           <label class="align">Пароль  <input type="password" name="password" class="form-control right" id="password" placeholder=" " ></label>
                                           <label class="align">Подтвердите пароль  <input type="password" name="confirm_password" class="form-control right" id="confirm_password" placeholder=" " ></label>
                                           <label class="align">Фамилия   <input type="text" name="f" class="form-control right" id="f" placeholder=" " ></label>
                                           <label class="align">Имя  <input type="text" name="i" class="form-control right" id="i" placeholder=" " ></label>
                                           <label class="align">Отчество <input type="text"  name="o" class="form-control right" id="v" placeholder=" " ></label>
                                           <label class="align">Адрес  <input type="text" name="address" class="form-control right" id="address" placeholder=" " ></label>
                                           <label class="align">Класс  <input type="text" name="class" class="form-control right" id="class" placeholder=" " ></label>
                                           <label class="align">Дата рождения  <input type="date" name="datebirth" class="form-control right" id="datebirth" placeholder=" " ></label>
                                           <label class="align">Родственник  <a href="#myModal"  role="button" data-toggle="modal"><img class="addphotos" src="<?php echo URL::base(); ?>./img/add.png"/></a>  <input type="text" name="rodstv" class="form-control right" id="" placeholder=" " ></label>
                                          <div class="center">
                                              <input type="submit"  name='rdbtn' class="buttonregistr" value="Создать">
                                              <input type="button"  onclick="location.href='index'"  name='redirect' class="buttonregistr" value="Отмена">
                                          </div>
                                      </form>
                                   </div>
                                </div>
                              </div>
                          </div>
<div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div id="" class="modal-dialog ">
        <div class="modal-content">
            <div id="addingrelative">
                <div class="span6">
                    <form action="addrealitv" method="post"  name="form">
                        <div class="header">
                            <h1>Родственник<h1>
                        </div>
                        <label class="align">Фамилия  <input type="text"   name='f' class=" form-control right" id="f" placeholder=" " required></label>
                        <label class="align">Имя <input type="text"  name='i' class="form-control right" id="i" placeholder=" " required></label>
                        <label class="align">Отчество  <input type="text"  name='o' class="form-control right" id="o" placeholder=" " required></label>
                        <label class="align">email   <input type="email" id="mail" style="width: 45.5%;height: 31px !important;" name='email' class="form-control right"  placeholder=" " required></label>
                        <label class="align">Телефон  <input type="text" name='phone'  class="form-control right" id="phone" placeholder=" " required></label>
                        <label class="align">Тип родства <select id="styledSelect" name="typereal" class="form-control right" style=" width: 45.5%;" >
                                <option name="grandmo">Бабушка</option>
                                <option name="grandpa">Дедушка</option>
                            </select>
                        </label>
                        <div class="center">
                            <input type="submit"  name='addrealitv' class="buttonregistr" value="Выбрать">

                            <input type="button"  onclick="location.href='adduserp'"  name='redirect' class="buttonregistr" value="Отмена">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
