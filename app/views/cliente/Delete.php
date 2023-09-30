<div class="base-home">
			<h1 class="titulo"><span class="cor">Novo</span> cadastro</h1>
		<div class="base-formulario">	
			
				<label>Nome</label>
					<input name="txt_nome" value="<?php echo $clientes->nome ?>" type="text" placeholder="Insira umm nome">
				<label>Email</label>
					<input name="txt_email" value="<?php echo $clientes->email ?>" type="text" placeholder="Insira um email">
				<label>Telefone</label>
					<input name="txt_fone" value="<?php echo $clientes->fone ?>" type="text" placeholder="Insira seu telefone">
				
				<a href="<?php echo URL_BASE . "/cliente/delete/" . $clientes->id_cliente . "/S" ?>"  class="btn">Excluir</a>
				<input type="hidden" name="id_cliente" value="<?php echo $clientes->id_cliente . "/S" ?>">
				<input type="submit" value="Cadastrar" class="btn">
				<input type="reset" name="Reset" id="button" value="Limpar" class="btn limpar">
			
		</div>	
</div>	