<?php include "inc/topo.php"; ?>
<?php include "inc/mask.php"; ?>
    <!-- <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Entrar</a></li>
        <li class="tab "><a href="#signup">Cadastre-se</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="login">   
          <form action="validacao.php" method="post"> 
            <div class="field-wrap">
              <label>
                Email <span class="req">*</span>
              </label>
              <input type="email" name="login" required autocomplete="off"/>
            </div> 
            <div class="field-wrap">
              <label>Senha<span class="req">*</span></label>
              <input type="password" name="senha" required autocomplete="off"/>
            </div>
            
            <p class="forgot"><a href="#">Esqueceu sua senha ?</a></p>
            
            <button class="button button-block"/>Entrar</button>
          
          </form>

        </div>
        
        <div id="signup">   
          <h1>Cadastre-se</h1> 
          <form action="signup.php" method="post"> 
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Primeiro nome <span class="req">*</span>
              </label>
              <input type="text" name="nome" required autocomplete="off" />
            </div> 
            <div class="field-wrap">
              <label>
                Sobrenome <span class="req">*</span>
              </label>
              <input type="text" name="sobrenome" required autocomplete="off"/>
            </div>
          </div> 
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>          
          <div class="field-wrap">
            <label>
              Digite a senha<span class="req">*</span>
            </label>
            <input type="password" name="senha" required autocomplete="off"/>
          </div>          
          <div class="field-wrap"> 
            <input type="date" name="data_nasc" required autocomplete="off"/>
          </div>        
          <div class="field-wrap">
            <label>
              CPF<span class="req">*</span>
            </label>
            <input type="text" name="cpf" required autocomplete="off"/>
          </div>       
          <div class="top-row">
            <div class="field-wrap" style="padding-left:50px;">
              <input type="radio" style="float:left;" name="genero" value="Masculino" required />
              <p style="float:left; color:white; margin:0px; margin-top:-5px;display:table;">Masculino</p>
            </div> 
            <div class="field-wrap" style="padding-left:50px;"> 
              <input type="radio" style="float:left;" name="genero" value="Feminino" required />
              <p style="float:left; color:white; margin:0px; margin-top:-5px;display:table;">Feminino</p>
         
            </div>
          </div>  
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
      </div> 
      
</div>  
     -->
     <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content" style="padding:25px;">
                    <form action="validacao.php" method="post">
                        <h1>Entrar</h1>
                        <div>
                            <input type="text" name="login" class="form-control" placeholder="E-mail" required="" />
                        </div>
                        <div>
                            <input type="password" name="senha" class="form-control" placeholder="Senha" required="" />
                        </div>
                        <div>
                            <input type="submit" class="btn btn-default submit" value="Entrar">
                            <a class="reset_pass" href="#">Esqueceu sua senha?</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">Novo no Comanda Online?
                                <a href="#toregister" class="to_register"> Cadastre-se. </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div> 

                                <p>©2016 Todos os direitos reservados.</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
            <div id="register" class="animate form">
                <section class="login_content" style="padding:15px;">
                    <form action="newfesteiro.php" method="post">
                        <h1>Cadastre-se</h1>
                        <div style="text-align:left;">Primeiro nome:
                            <input type="text" name="nome" class="form-control" placeholder="Pimeiro nome" required />
                        </div>
                        <div style="text-align:left;">Sobrenome:
                            <input type="text" name="sobrenome" class="form-control" placeholder="Sobrenome" required />
                        </div>
                        <div style="text-align:left;">CPF:
                            <input type="text" name="cpf" onkeypress="mascara(this,cpf_mask)" maxlength="14" id="cpf" onblur="validarCPF('cpf','cpfResult')" class="form-control" placeholder="CPF" required />
                            <div id="cpf2"></div>
                        </div>
                    <div id="cpfResult"></div>
                        <div style="text-align:left; margin-bottom:20px;">Data de nascimento:
                            <input type="date" name="data_nasc" class="form-control"  required />
                        </div>
                        <div style="text-align:left;">E-mail:
                            <input type="email" name="email" class="form-control" placeholder="Email" required />
                        </div>
                        <div style="text-align:left;">Senha:
                            <input type="password" name="senha" class="form-control" placeholder="Senha" required />
                        </div> 
                        <div style="text-align:left;width:50%;float:left;"> :
                          <input type="radio" style="float:left;" name="genero" value="Masculino" required />
                          <p style="float:left; margin:0px 0px 0px 5px; display:table;">Masculino</p>
                        </div> 
                        <div style="text-align:left;width:50%;float:left; "> :
                          <input type="radio" style="float:left;" name="genero" value="Feminino" required />
                          <p style="float:left; margin:0px 0px 0px 5px; display:table;">Feminino</p>
                        </div> 
                        <hr>
                        <div class="clearfix"></div>
                        <div style="margin-top:20px;">
                            <input type="submit" class="btn btn-default submit" value="Cadastrar"> 
                        </div>
                        <hr>
                        <div class="clearfix"></div>
                        <div class="separator">
                            <p class="change_link">Já é membro?
                                <a href="#tologin" class="to_register"> Entre no Comanda Online </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div> 

                                <p>©2016 Todos os direitos reservados.</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
        </div>
    </div>
    <?php include "inc/rodape.php"; ?>