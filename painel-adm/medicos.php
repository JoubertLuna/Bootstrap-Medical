		<!-- Button trigger modal -->
		<div class="row botao-novo">
			<div class="col-md-12">
				<button data-toggle="modal" data-target="#modal" type="button" class="btn btn-secondary">Novo Médico</button>
			</div>
		</div>

		<!-- Button trigger modal -->

		<div class="row mt-4">

			<div class="col-md-6 col-sm-12">

				<div class="float-left">

					<label class="registro" for="exampleFormControlSelect1">Registros</label>
					<select class="form-control-sm" id="exampleFormControlSelect1">
						<option>10</option>
						<option>25</option>
						<option>50</option>
					</select>


				</div>

			</div>


			<div class="col-md-6 col-sm-12">

				<div class="float-right mr-4">

					<!-- Buscar Nome e CRM -->
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Nome ou CRM" aria-label="Search" name="txtbuscar">
						<button class="btn btn-outline-secondary btn-sm my-2 my-sm-0" type="submit" name="<?php echo $item2 ?>"><i class="fas fa-search"></i></button>
					</form>
				</div>

			</div>


		</div>

		<div>
			<table class="table table-sm mt-3">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Nome</th>
						<th scope="col">Especialidade</th>
						<th scope="col">CRM</th>
						<th scope="col">Telefone</th>
						<th scope="col">Ações</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Mark</td>
						<td>Otto</td>
						<td>crm99099900</td>
						<td>081994212314</td>
						<td>
							<a href="#"><i class="fas fa-edit text-info"></i></a>
							<a href="#"><i class="fas fa-trash-alt text-danger"></i></a>
						</td>

					</tr>

				</tbody>
			</table>

		</div>

		<!-- Modal -->
		<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Cadastro de Médicos</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body"> <!-- Conteúdo Modal -->

						<form>

							<div class="row">

								<div class="col-md-6 col-sm-12">

									<!-- Nome -->
									<div class="form-group">
										<label for="exampleFormControlInput1">Nome</label>
										<input type="text" class="form-control" id="" placeholder="Insira o Nome" name="nome">
									</div>	

								</div>

								<div class="col-md-6 col-sm-12">

									<!-- CPF -->
									<div class="form-group">
										<label for="exampleFormControlInput1">CPF</label>
										<input type="text" class="form-control" id="cpf" placeholder="Insira o CPF" name="cpf">
									</div>	

								</div>

								<div class="col-md-6 col-sm-12">

									<!-- Endereço -->
									<div class="form-group">
										<label for="exampleFormControlInput1">Endereço</label>
										<input type="text" class="form-control" id="" placeholder="Insira o Endereço" name="endereço">
									</div>

								</div>

								<div class="col-md-6 col-sm-12">

									<!-- CEP -->
									<div class="form-group">
										<label for="exampleFormControlInput1">CEP</label>
										<input type="text" class="form-control" id="cep" placeholder="Insira o CEP" name="cep">
									</div>

								</div>

							</div>

							<div class="row">
								
								<div class="col-md-4 col-sm-12">
									
									<!-- CRM -->
									<div class="form-group">
										<label for="exampleFormControlInput1">CRM</label>
										<input type="text" class="form-control" id="crm" placeholder="Insira o CRM" name="crm">
									</div>
									
								</div>

								<div class="col-md-4 col-sm-12">
									
									<!-- Telefone -->
									<div class="form-group">
										<label for="exampleFormControlInput1">Telefone</label>
										<input type="text" class="form-control" id="telefone" placeholder="Insira o Telefone" name="telefone">
									</div>
									
								</div>

								<div class="col-md-4 col-sm-12">

									<!-- Celular -->
									<div class="form-group">
										<label for="exampleFormControlInput1">Celular</label>
										<input type="text" class="form-control" id="celular" placeholder="Insira o Celular" name="celular">
									</div>

								</div>

							</div>

							<div class="row">

								<div class="col-md-6 col-sm-12">

									<!-- Especialidade -->	
									<div class="form-group">
										<label for="exampleFormControlSelect1">Especialidade</label>
										<select class="form-control" id="" name="especialidade">
											<option>1</option>
										</select>
									</div>

								</div>

								<div class="col-md-6 col-sm-12">

									<!-- Email -->
									<div class="form-group">
										<label for="exampleFormControlInput1">Email</label>
										<input type="email" class="form-control" id="" placeholder="Insira o Email" name="email">
									</div>

								</div>

							</div>								
							
						</form>

						
					</div> <!-- Conteúdo Modal -->

					<!-- Conteúdo Botões -->
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
						<form method="post">
							<button type="submit" name="btn-salvar" class="btn btn-primary">Salvar</button>
						</form>
					</div>
					<!-- Conteúdo Botões -->
				</div>
			</div>
		</div>


		<!-- MASCARAS TELEFONE - CELULAR - CPF - CEP -->

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

		<script src="../js/mascaras.js">
			
		</script>