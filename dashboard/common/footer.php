<!-- Footer START -->
<footer class="content-footer">
  <div class="footer">
    <div class="copyright">
      <span>Copyright © 2019 <b class="text-dark">BeautyQ</b>. Todos os Direitos Reservados.</span>
      <span class="go-right">
        <a href="" class="text-gray mrg-right-15">Termos &amp; Condições</a>
        <a href="" class="text-gray">Política &amp; Privacidade</a>
      </span>
    </div>
  </div>
</footer>
<!-- Footer END -->

<!-- Modal START-->
<div class="modal fade" id="modal-checkin">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Fast Checkin</h4>
      </div>
      
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label>Inserir Telefone do Cliente</label>
            <input type="text" placeholder="(00) 00000-0000" class="form-control">
          </div>

          <div class="form-group">
            <label>Adicionar Pontos</label>
            <select class="form-control">
              <option value="" disabled="" selected="">Pontos</option>
              <option value="1">10</option>
              <option value="2">20</option>
              <option value="3">30</option>
              <option value="4">40</option>
            </select>
          </div>
        </form>
      </div>
      
      <button data-dismiss="modal" class="btn btn-primary btn-block no-mrg no-border pdd-vertical-15 ng-scope">
        <span class="text-uppercase">Fazer Checkin</span>
      </button>
    </div>
  </div>
</div>


<div class="modal fade" id="modal-sm">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Pontuação</h4>
      </div>
      
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label>Adicionar Pontos</label>
            <select class="form-control">
              <option value="" disabled="" selected="">Pontos</option>
              <option value="1">10</option>
              <option value="2">20</option>
              <option value="3">30</option>
              <option value="4">40</option>
            </select>
          </div>
        </form>
      </div>
      
      <button data-dismiss="modal" class="btn btn-primary btn-block no-mrg no-border pdd-vertical-15 ng-scope">
        <span class="text-uppercase">Adicionar</span>
      </button>
    </div>
  </div>
</div>


<div class="modal fade" id="default-modal-trocar">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Trocas</h4>
      </div>
      
      <div class="modal-body">
        <div class="email-app">
          <div class="email-wrapper row ml-0">
            <div class="email-list col-lg-12" style="border-right: 0px !important;">
              <div class="email-list-wrapper scrollable ps-container ps-theme-default">
                <div class="list-view-group-container">
                  
                  <ul class="email-list-item">
                    <li class="email-item">
                      <div class="email-tick">
                        <div class="checkbox"> 
                          <input type="checkbox" id="email-1" name="email-1">
                          <label for="email-1"></label>
                        </div> 
                      </div> 
                      
                      <div class="open-mail"> 
                        <div class="email-detail">
                          <p class="from">Sabonete Líquido em Gelatina</p> 
                          <p class="subject">Produto | 30 Pontos</p> 
                        </div>
                      </div>
                    </li>  
                    
                    <li class="email-item">
                      <div class="email-tick">
                        <div class="checkbox">
                          <input type="checkbox" id="email-1" name="email-1"> 
                          <label for="email-1"></label>
                        </div>
                      </div> 
                      
                      <div class="open-mail"> 
                        <div class="email-detail">
                          <p class="from">Sabonete Líquido em Gelatina</p> 
                          <p class="subject">Produto | 30 Pontos</p> 
                        </div>
                      </div>
                    </li>  
                    
                    <li class="email-item">
                      <div class="email-tick">
                        <div class="checkbox"> 
                          <input type="checkbox" id="email-1" name="email-1"> 
                          <label for="email-1"></label>
                        </div>
                      </div> 
                      
                      <div class="open-mail"> 
                        <div class="email-detail">
                          <p class="from">Sabonete Líquido em Gelatina</p> 
                          <p class="subject">Produto | 30 Pontos</p> 
                        </div>
                      </div>
                    </li>
                  </ul>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        
      <div class="modal-footer no-border">
        <div class="text-right">
          <button class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
          <button class="btn btn-primary btn-sm" data-dismiss="modal">Trocar</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="default-modal-beautycard">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Assinatura Cartão de Fidelidade BeautyQ</h4>
      </div>
      
      <div class="modal-body">
        <div class="form-group">
          <label>Nome como aparece no cartão</label>
          <input type="text" placeholder="Nome igual ao cartão" class="form-control">
        </div>

        <div class="form-group">
          <label>Número do Cartão</label>
          <input type="number" class="form-control" name="number" placeholder="XXXX XXXX XXXX XXXX" required>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Data de Validade</label>
              <input type="text" placeholder="00/00" class="form-control">
            </div>
          </div>
          
          <div class="col-md-6">
            <div class="form-group">
              <label>Código do Cartão</label>
              <input type="text" placeholder="XXX" class="form-control">
            </div>
          </div>
        </div>
      </div>
      
      <div class="modal-footer no-border">
        <div class="text-right">
          <button class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
          <button class="btn btn-primary btn-sm" data-dismiss="modal">Assinar</button>
        </div>
      </div>
    </div>
  </div>
</div> 


<div class="modal fade" id="default-modal-cliente">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Dados do Cliente</h4>
      </div>
      
      <div class="modal-body">
        <div class="form-group">
          <label>Telefone do Cliente</label>
          <input type="text" placeholder="(00) 00000-0000" class="form-control">
        </div>

        <div class="form-group">
          <label>Nome completo do cliente</label>
          <input type="text" class="form-control" name="number" placeholder="Nome" required>
        </div>

        <div class="form-group">
          <label>Data de Nascimento do Cliente</label>
          <input type="text" class="form-control" name="number" placeholder="00/00/0000" required>
        </div>

        <div class="form-group row">
          <div class="col-md-12">
            <label>Genero do Cleinte</label>
          </div>
          <div class="col-md-12">
            <div class="radio radio-inline">
              <input type="radio" checked="" name="radio1" id="rad1">
              <label for="rad1">Masculino</label>
            </div>
  
            <div class="radio radio-inline">
              <input type="radio" checked="" name="radio1" id="rad2">
              <label for="rad2">Feminino</label>
            </div>

            <div class="radio radio-inline">
              <input type="radio" checked="" name="radio1" id="rad2">
              <label for="rad2">Outro</label>
            </div>
          </div>
        </div>
      </div>
      
      <div class="modal-footer no-border">
        <div class="text-right">
          <button class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
          <button class="btn btn-primary btn-sm" data-dismiss="modal">Ok, entendi!</button>
        </div>
      </div>
    </div>
  </div>
</div> 


<div class="modal fade" id="default-modal-premio">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Cadastro de Prêmios</h4>
      </div>
                
      <div class="modal-body">              
        <div class="form-group">
          <label>Nome do Serviço</label>
          <input type="text" placeholder="Insira o nome do serviço que servirá de premio" class="form-control">
        </div>

        <div class="form-group">
          <label>Descrição</label>
          <textarea class="form-control" style="min-height: 100px;" placeholder="Descreva o serviço" rows="2" id="form-1-5"></textarea>
        </div>

        <div class="form-group">
          <label>Limites</label>
          <input type="text" placeholder="Insira o limite" class="form-control">
        </div>

        <div class="form-group">
          <label>Pontuação requerida para troca</label>
          <input type="number" class="form-control" name="number" placeholder="Número de pontos necessários para troca" required>
        </div>

        <div class="form-group row" style="margin-bottom: 0px;">
          <div class="col-md-10">
            <div class="radio radio-inline">
              <input type="radio" checked="" name="radio1" id="rad1">
              <label for="rad1">Produto</label>
            </div>
  
            <div class="radio radio-inline">
              <input type="radio" checked="" name="radio1" id="rad2">
              <label for="rad2">Serviço</label>
            </div>
          </div>
        </div>
      </div>
      
      <div class="modal-footer">
        <div class="text-right">
          <button class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
          <button class="btn btn-primary btn-sm" data-dismiss="modal">Cadastrar</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modal-assinante">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header"><h4>Cadastro - Novo Profissional</h4></div>
                
                <div class="modal-body">

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nome Completo</label>
                        <input type="text" placeholder="Insira seu nome" class="form-control">
                      </div>
                    </div>
                  </div>
                    
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Número do Telefone</label>
                        <input type="text" placeholder="Insira o número" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>N. do Banco</label>
                        <input type="text" placeholder="Número do banco" class="form-control">
                      </div>
                    </div>
                      
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Agência</label>
                        <input type="text" placeholder="Número da agência" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Conta</label>
                        <input type="text" placeholder="Número da conta" class="form-control">
                      </div>
                    </div>
                  </div>

                </div>
                
                <div class="modal-footer no-border">
                  <div class="text-right">
                    <button class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" data-dismiss="modal">Cadastrar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- Modal END-->