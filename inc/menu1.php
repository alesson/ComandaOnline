<script type="text/javascript">
	function change(id){ 
		if(document.getElementById(id).teste == '1'){  
			document.getElementById(id).className = 'fa fa-caret-right';
			document.getElementById(id).teste = '0';
		}
		else{ 
			document.getElementById(id).className = 'fa fa-caret-down';
			document.getElementById(id).teste = '1';
		}
	} 
	function change2(id){  
		if(document.getElementById(id).teste == '0'){  
			document.getElementById(id).className = 'fa fa-caret-down';
			document.getElementById(id).teste = '1';
		}
		else{	
			document.getElementById(id).className = 'fa fa-caret-right';
			document.getElementById(id).teste = '0';
		}
	}   
</script> 
<div class="show-for-large-up small-2 menu-left" style="overflow:auto; margin-top:50px;">
	<div class="row">
		<div class="small-12">
			<ul class="accordion" data-accordion >  	
				<li class="accordion-navigation <?php if (isset($_GET['go']) && ($_GET['go'] == 'modalidades' || $_GET['go'] == 'profissionais'  || $_GET['go'] == 'escolas' || $_GET['go'] == 'atletas' || $_GET['go'] == 'turmas' || $_GET['go'] == 'escolas')): ?> active <?php endif ?>" >
				    <a href="#panel3a" <?php if (isset($_GET['go']) && ($_GET['go'] == 'atletas' || $_GET['go'] == 'turmas' || $_GET['go'] == 'profissionais' || $_GET['go'] == 'escolas' || $_GET['go'] == 'modalidades')){ ?> onclick="change2('setinha')" <?php }else{ ?> onclick="change('setinha')" <?php } ?>>
				    	<i class="fa fa-pencil-square-o" style="color:#333;"></i>
				    	Cadastros
				    	<i id="setinha" <?php if (isset($_GET['go']) && ($_GET['go'] == 'atletas' || $_GET['go'] == 'turmas' || $_GET['go'] == 'profissionais' || $_GET['go'] == 'escolas' || $_GET['go'] == 'modalidades')){ ?> class="fa fa-caret-down" teste="0" <?php }else{ ?> class="fa fa-caret-right" teste="1"<?php } ?>  style="float:right;display:table; margin-top:5px;"></i>
				    </a>
				    <div id="panel3a" class="content  <?php if (isset($_GET['go']) && ($_GET['go'] == 'atletas' || $_GET['go'] == 'profissionais' || $_GET['go'] == 'turmas' || $_GET['go'] == 'escolas' || $_GET['go'] == 'modalidades')): ?> active <?php endif ?>" style="padding-left:30px; min-height: 20px;">
				    	<ul>   
				    		<li class="fa-child" <?php if (isset($_GET['go']) && $_GET['go']=='atletas'): ?>style="color:rgb(237,50,55);"<?php endif ?>>
				    			<a style="font-size:14px; color:#222; <?php if (isset($_GET['go']) && $_GET['go']=='atletas'): ?>color:#008CBA; font-weight:bold;<?php endif ?>" href="?go=atletas" title="Atletas">Atletas</a>
				    		</li>  
				    		<li class="fa-university" <?php if (isset($_GET['go']) && $_GET['go']=='escolas'): ?>style="color:rgb(237,50,55);"<?php endif ?>>
				    			<a style="font-size:14px; color:#222; <?php if (isset($_GET['go']) && $_GET['go']=='escolas'): ?>color:#008CBA; font-weight:bold;<?php endif ?>" href="?go=escolas" title="Escolas">Escolas</a>
				    		</li>   
				    		<li class="fa-cubes" <?php if (isset($_GET['go']) && $_GET['go']=='modalidades'): ?>style="color:rgb(237,50,55);"<?php endif ?>>
				    			<a style="font-size:14px; color:#222; <?php if (isset($_GET['go']) && $_GET['go']=='modalidades'): ?>color:#008CBA; font-weight:bold;<?php endif ?>" href="?go=modalidades" title="Escolas">Modalidades</a>
				    		</li> 
				    		<li class="fa-mortar-board" <?php if (isset($_GET['go']) && $_GET['go']=='turmas'): ?>style="color:rgb(237,50,55);"<?php endif ?>>
				    			<a style="font-size:14px; color:#222; <?php if (isset($_GET['go']) && $_GET['go']=='turmas'): ?>color:#008CBA; font-weight:bold;<?php endif ?>" href="?go=turmas" title="Turmas">Turmas</a>
				    		</li>
				    		<li class="fa-user" <?php if (isset($_GET['go']) && $_GET['go']=='profissionais'): ?>style="color:rgb(237,50,55);"<?php endif ?>>
				    			<a style="font-size:14px; color:#222; <?php if (isset($_GET['go']) && $_GET['go']=='profissionais'): ?>color:#008CBA; font-weight:bold;<?php endif ?>" href="?go=profissionais" title="Profissionais">Profissionais</a>
				    		</li> 
				    	</ul>
				    </div>
				</li>
			</ul>   
			<ul class="accordion act" data-accordion >  	
				<li class="accordion-navigation" <?php if (isset($_GET['go']) && ($_GET['go'] == 'usuarios' || $_GET['go'] == 'logs')): ?> active <?php endif ?>>
				    <a href="#panel3aasd" <?php if (isset($_GET['go']) && ($_GET['go'] == 'usuarios' || $_GET['go'] == 'logs')){ ?> onclick="change2('setinha123')" <?php }else{ ?> onclick="change('setinha123')" <?php } ?>> 
				    	<i class="fa fa-cog" style="color:#333;"></i>
				    	Configurações
				    	<i id="setinha123" <?php if (isset($_GET['go']) && ($_GET['go'] == 'usuarios' || $_GET['go'] == 'logs')){ ?> class="fa fa-caret-down" teste="0" <?php }else{ ?> class="fa fa-caret-right" teste="1"<?php } ?> style="float:right;display:table; margin-top:5px;"></i>
					</a> 
				    <div id="panel3aasd" class="content <?php if (isset($_GET['go']) && ($_GET['go'] == 'usuarios' || $_GET['go'] == 'logs')): ?> active <?php endif ?>" style="padding-left:30px;">
				    	<ul>
				    		<li class="fa-users" <?php if (isset($_GET['go']) && $_GET['go']=='usuarios'): ?>style="color:rgb(237,50,55);"<?php endif ?>>
				    			<a style="color:#222;<?php if (isset($_GET['go']) && $_GET['go']=='usuarios'): ?>font-weight:bold;color:#008CBA; <?php endif ?>font-size:14px; " href="?go=usuarios">Usuários</a>
				    		</li> 
				    		<li class="fa-file-text-o" <?php if (isset($_GET['go']) && $_GET['go']=='logs'): ?>style="color:rgb(237,50,55);"<?php endif ?>>
				    			<a style="color:#222;<?php if (isset($_GET['go']) && $_GET['go']=='logs'): ?>font-weight:bold;color:#008CBA; <?php endif ?>font-size:14px; " href="?go=logs">Logs</a>
				    		</li> 
				    	</ul>
				    </div>
				</li>
			</ul>
		</div>
	</div>	 
</div>
<div class="show-for-medium-down">
	<div class="contain-to-grid"> <!-- nav wrapper -->
	    <nav class="top-bar" data-topbar>
	        <ul class="title-area">
	            <li class="name"></li>
	            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	        </ul>
	        <section class="top-bar-section">
	            <!-- Right Nav Section -->
	            <ul class="right"> 
	                <li class="has-dropdown not-click moved">
	                    <a href="#">Cadastros</a> 
	                    <ul class="dropdown  left">
	                    	<li class="title back js-generated"><h5>
	                    		<a href="javascript:void(0)">Voltar</a></h5></li> 
				          		<li><label>Cadastros</label></li> 
					    		
					    		<li <?php if (isset($_GET['go']) && $_GET['go']=='fornecedores'): ?>
					    			style="font-weight:bold;"
					    		<?php endif ?>><a style="font-size:14px;" href="?go=fornecedores">Fornecedores</a></li>
					    		
					    		<li <?php if (isset($_GET['go']) && $_GET['go']=='unidades'): ?>
					    			style="font-weight:bold;"
					    		<?php endif ?>><a style="font-size:14px;" href="?go=unidades">Unidades</a></li>
					    		
					    		<li <?php if (isset($_GET['go']) && $_GET['go']=='unidadesMedidas'): ?>
					    			style="font-weight:bold;"
					    		<?php endif ?>><a style="font-size:14px;" href="?go=unidadesMedidas">Unidades de Medida</a></li>

					    		 <li <?php if (isset($_GET['go']) && $_GET['go']=='bancos'): ?>
				    			style="font-weight:bold;"
					    		<?php endif ?>><a style="font-size:14px; " href="?go=bancos">Contas Bancárias</a></li>
					    		<li <?php if (isset($_GET['go']) && $_GET['go']=='produtos'): ?>
					    			style="font-weight:bold;"
					    		<?php endif ?>><a style="font-size:14px ;" href="?go=produtos">Produtos</a></li>
					    		<li <?php if (isset($_GET['go']) && $_GET['go']=='protecao'): ?>
					    			style="font-weight:bold;"
					    		<?php endif ?>><a style="font-size:14px ;" href="?go=protecao">Proteção</a></li>
					    		<li <?php if (isset($_GET['go']) && $_GET['go']=='fonte_de_recurso'): ?>
					    			style="font-weight:bold;"
					    		<?php endif ?>><a style="font-size:14px;" href="?go=fonte_de_recurso">Fonte de recurso</a></li>
					          </li>
				          
				        </ul>
	                </li>
	                <li class="has-dropdown not-click moved">
	                    <a href="#">Movimentações</a>	                    
	                    <ul class="dropdown left">
	                    	<li class="title back js-generated"><h5>
	                    		<a href="javascript:void(0)">Voltar</a></h5></li>
	                    		 
				          		<li><label>Movimentações</label></li>
				          		<li <?php if (isset($_GET['go']) && $_GET['go']=='pedidos'): ?>
				    			style="font-weight:bold;"
					    		<?php endif ?>><a href="?go=pedidos">Pedidos</a></li>

					    		<li <?php if (isset($_GET['go']) && $_GET['go']=='cadastrar'): ?>
					    			style="font-weight:bold;"
					    		<?php endif ?>><a   href="?go=cadastrar">Autorização de Fonecimento (AF)</a></li>
 
				          </li>				          
				        </ul>
	                </li>
	                <li class="has-dropdown not-click moved">
	                    <a href="#">Consultas</a>	                    
	                    <ul class="dropdown left">
	                    	<li class="title back js-generated"><h5>
	                    		<a href="javascript:void(0)">Voltar</a></h5></li>
	                    		 
				          		<li><label>Consultas</label></li>
				          		 
					    		<li <?php if (isset($_GET['go']) && $_GET['go']=='relatorio1'): ?>
				    			style="font-weight:bold;"
				    		<?php endif ?>><a href="?go=relatorio1">AF's aguardando liquidação</a></li>

				    		<li <?php if (isset($_GET['go']) && $_GET['go']=='relatorio2'): ?>
				    			style="font-weight:bold;"
				    		<?php endif ?>><a href="?go=relatorio2">AF's liquidadas</a></li>

				    		<li <?php if (isset($_GET['go']) && $_GET['go']=='relatorio3'): ?>
				    			style="font-weight:bold;"
				    		<?php endif ?>><a href="?go=relatorio3">Despesas bancárias NF</a></li>
				          </li>				          
				        </ul>
	                </li>
	            </ul> 
	        </section>
	    </nav>
	</div>
</div>
 