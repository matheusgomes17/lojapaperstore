@extends('frontend.layouts.app')

@section('title') :: Política de Privacidade e Segurança @endsection

@section('content')
<section id="menu-navigate">
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
				<div class="row content">
	        		<header class="col-md-12 privacy">
	        			<h1 style="display: none;">Institucional {{ app_name() }}</h1>
	        			<section>
	        				<header>
	        					<h1 class="title">Política de Privacidade e Segurança</h1><hr><br><br>
	        				</header>
	        				<footer>
	        					<section>
	        						<header>
	        							<h1 class="subtitle">Sumário</h1><hr>
	        						</header>
	        						<footer>
	        							<ul>
	        								<li><a href="#identificacao">Identificação</a></li>
	        								<li><a href="#informacoes">Informações gerais</a></li>
	        								<li><a href="#guarda-dados">Coleta, utilização e guarda dos dados</a></li>
	        								<li><a href="#compartilhamento">Compartilhamento e divulgação dos dados</a></li>
	        								<li><a href="#medidas-seguranca">Medidas de segurança</a></li>
	        								<li><a href="#direito-dados">Direitos das pessoas sobre os dados coletados</a></li>
	        								<li><a href="#uso-dados">Uso de dados em caso de alteração de controle da {{ app_name() }}</a></li>
	        							</ul>
	        						</footer>
	        					</section>
	        					<section id="identificacao">
	        						<header>
	        							<h2 class="subtitle">1. Identificação</h2><hr>
	        						</header>
	        						<footer>
	        							<p>Este site é de propriedade, mantido, e operado por {{ app_name() }} - Decoração em Papel de Parede, com endereço na Rua Porangaba, 781 D, Planalto. CEP: 16.072-475. Araçatuba - SP, inscrita no CNPJ/MF sob o nº 22.312.365/0001-94, com Inscrição Estadual nº 177.343.622-116.</p>
	        						</footer>
	        					</section>
	        					<section id="informacoes">
	        						<header>
	        							<h2 class="subtitle">2. Informações gerais</h2><hr>
	        						</header>
	        						<footer>
	        							<p>A {{ app_name() }} toma todas as medidas necessárias para proteger a privacidade do usuário, em atendimento à legislação em vigor. Este documento detalha as formas de coleta, guarda, utilização, compartilhamento e divulgação de seus dados pessoais, bem como aponta claramente as medidas tomadas para assegurar a proteção dos dados coletados.</p>
	        						</footer>
	        					</section>
	        					<section id="guarda-dados">
	        						<header>
	        							<h2 class="subtitle">3. Coleta, utilização e guarda dos dados</h2><hr>
	        						</header>
	        						<footer>
	        							<p><strong>Coleta de dados: Conta de Acesso</strong> - Para a criação de uma conta de acesso no site, o usuário deve preencher um cadastro simples composto de nome, endereço de e-mail, telefone, CEP e criação de uma senha será requerido para o envio de mensagens publicitárias e promocionais ao usuário sobre produtos, serviços, respostas de orçamentos, promoções e/ou novidades da {{ app_name() }}. Uma conta de acesso básica poderá ser feita pelo usuário a qualquer momento. Os dados fornecidos pelos usuários <strong>serão armazenados e utilizados pela {{ app_name() }}, por si ou por terceiros por ela contratados, para fornecer os produtos do site, compartilhar dados, enviar e-mails de ofertas, produtos, serviços e campanhas de marketing, armazenar o histórico de produtos visualizados, personalizar páginas do site e realizar entregas e devolução. Os dados poderão ser compartilhados com terceiros contratados pela {{ app_name() }} nos termos desta Política, ressaltando-se que a criação de cada conta de acesso ou qualquer cadastro no site, para o qual seja necessário o envio de qualquer dado pessoal do usuário, pressupõe o consentimento expresso quanto à coleta, uso, armazenamento e tratamento de dados pessoais.</strong> O usuário é responsável, nas esferas civil e criminal, pela veracidade e atualização dos dados fornecidos e a {{ app_name() }} se exime de qualquer reponsabilidade por danos decorrentes do preenchimento incompleto, impreciso ou inexato do cadastro pelo usuário, sob qualquer meio ou forma, ou, ainda, pelo uso desse cadastro de forma indevida por qualquer terceiro não autorizado a usar tais dados ou, ainda, por terceiros que tenham, devida ou indevidamente, obtido os dados do usuário para acesso no site, agindo como se ele fosse.</p>

	        							<p><strong>Coleta de dados: Cookies</strong> - Visando oferecer a melhor experiência de navegação ao usuário, a {{ app_name() }} utiliza-se de tecnologias para coletar e armazenar informações relacionadas à visita do usuário no site e isso pode incluir o envio de um ou mais cookies ou identificadores anônimos que coletam dados relativos às preferências de navegação e às páginas visitadas pelo usuário. Desta forma, a apresentação do site fica personalizada e alinhada aos interesses pessoais do usuário. A utilização destes dados fica restrita ao objetivo indicado e a {{ app_name() }} se compromete a não utilizar ou permitir a utilização de tais dados com outra finalidade. A coleta, guarda e tratamento destes dados é absolutamente automatizada, não havendo nenhuma possibilidade de contato humano com os dados em questão. O usuário pode e poderá, a qualquer tempo, caso discorde da política de cookies acima, utilizar as ferramentas de seu navegador que impedem a instalação de cookies e ainda apagar quaisquer cookies existentes em seu dispositivo de conexão com a internet. Neste caso, algumas funcionalidades do site poderão apresentar erros. A {{ app_name() }} poderá ainda utilizar-se de outras tecnologias para a coleta de dados de navegação dos usuários, comprometendo-se a guardá-los, tratá-los e utilizá-los em conformidade com este Política.</p>

	        							<p><strong>Coleta de dados: Registros de acesso</strong> - A {{ app_name() }} manterá em sua base de dados todas as informações relativas aos acessos do usuário ao site, incluindo, mas não se limitando ao endereço IP, às páginas acessadas, aos horários e datas de acesso, e o dispositivo de acesso utilizado, nos termos da legislação vigente. Tais registros poderão ser utilizados em investigações internas ou públicas para averiguação de práticas que possam gerar quaisquer prejuízos à {{ app_name() }}, inclusive a prática de crimes em ambientes virtuais. A {{ app_name() }} poderá acessar bases de dados públicas ou privadas para confirmar a veracidade dos dados pessoais informados pelo usuário, inclusive dados relacionados ao pagamento da compra.</p>

	        							<p><strong>Utilização de dados: E-mail</strong> - A {{ app_name() }} utilizará o e-mail do usuário prioritariamente para enviar informações sobre suas compras (confirmação de compra e atualizações da situação). O e-mail cadastrado também será utilizado para comunicação relacionada aos orçamentos solicitados pelo cliente e para recuperação da senha de acesso do usuário, em caso de perda ou esquecimento da senha.</p>

	        							<p><strong>Utilização de dados: Publicidade e-mail, MMS ou SMS</strong> - O usuário poderá, caso queira, se inscrever em nossa Newsletter para receber ofertas de produtos. A qualquer momento o usuário poderá alterar sua decisão de descadastro existente nas newsletters enviadas pela {{ app_name() }} sendo retirado imediatamente da base de dado.</p>

										<p><strong>Utilização dos dados: Outras formas</strong> - Além das formas expostas acima, a {{ app_name() }} poderá, a seu exclusivo critério, utilizar os dados pessoais do usuário nas seguintes formas: 
										<ul>
											<li>Atualização de cadastro.</li>
											<li>Garantia da segurança do usuário.</li>
											<li>Resposta a solicitações do próprio usuário.</li>
											<li>Informação acerca de alterações nos Termos e Condições de Uso ou das Políticas.</li>
											<li>Elaboração de estatísticas com relação ao uso do site, garantido o anonimato do usuário, inclusive para fins de aperfeiçoamento e entendimento do perfil dos usuários para a melhoria do site.</li>
											<li>Aperfeiçoamento de ferramentas de interatividade entre o site e o usuário, garantido seu anonimato.</li>
											<li>Cumprimento de ordens judiciais.</li>
											<li>Defesa dos direitos da {{ app_name() }} contra o usuário em procedimentos judiciais ou administrativos.</li>
										</ul></p>

										<p><strong>Guarda dos dados:</strong> A {{ app_name() }} guardará todos os dados coletados em suas bases de dados protegidas e seguras. Tais dados serão acessados apenas por processos computadorizados automatizados, profissionais autorizados e nos casos listados nesta Política. Caso o usuário requeira a exclusão de seus dados da base de dados, a {{ app_name() }} se reserva o seu direito de manter os dados em questão em cópias de salvaguarda por até 6 (seis) meses, a fim de cumprir obrigações legais de guarda obrigatória.</p>
	        						</footer>
	        					</section>
	        					<section id="compartilhamento">
	        						<header>
	        							<h2 class="subtitle">4. Compartilhamento e divulgação dos dados</h2><hr>
	        						</header>
	        						<footer>
	        							<p>A {{ app_name() }} tem a confidencialidade dos dados pessoais do usuário como prioridade em seus negócios. Assim, assume o compromisso de não divulgar, compartilhar, dar acesso a, facilitar acesso a, alugar, vender, trocar ou de qualquer outra forma disponibilizar tais informações a terceiros, sob nenhum pretexto, exceto nos casos autorizados expressamente pelo Usuário, inclusive nos casos indicados abaixo. A {{ app_name() }} poderá compartilhar dados pessoais dos usuários com seus parceiros comerciais, como empresas processadoras de pagamentos, administradoras de cartão de crédito e transportadoras. Neste caso, serão compartilhados apenas os dados pessoais imprescindíveis para que o parceiro comercial da {{ app_name() }} desempenhe sua atividade (cobrança, entrega, etc.). Tais parceiros comerciais serão obrigados, por meio de contratos de confidencialidade, a não arquivar, manter em arquivo, compilar, copiar, reproduzir ou compartilhar tais dados com quem quer que seja. A outra hipótese de divulgação de dados pessoais é por meio de uma determinação judicial. Também neste caso, a divulgação ocorrerá apenas na medida necessária para cumprir a determinação judicial, permanecendo sigilosos os dados não requeridos pela autoridade em questão.</p>
	        						</footer>
	        					</section>
	        					<section id="medidas-seguranca">
	        						<header>
	        							<h2 class="subtitle">5. Medidas de segurança</h2><hr>
	        						</header>
	        						<footer>
	        							<p><strong>Recursos tecnológicos:</strong> A {{ app_name() }} adota recursos tecnológicos avançados para garantir a segurança de todos os dados pessoais coletados e armazenados. Entre as medidas de segurança implementadas, estão a utilização de modernas forma de criptografia e a instalação de barreiras contra o acesso indevido à base de dados (firewalls). Tais medidas podem ser verificadas pelo usuário acessando o site pela visualização do “cadeado de segurança” em seu navegador de internet.</p>

	        							<p><strong>Sigilo da senha:</strong> A {{ app_name() }} recomenda que o usuário mantenha sua senha sob total sigilo, evitando a sua divulgação a terceiros. A {{ app_name() }} nunca solicitará ao usuário que informe sua senha fora do site, por telefone, e-mail ou por qualquer outro meio de comunicação. A senha do usuário deverá ser usada exclusivamente no momento do acesso à conta do usuário no site. Caso o Usuário suspeite que sua senha tenha sido exposta a terceiros, a {{ app_name() }} recomenda a imediata substituição da senha.</p>

	        							<strong>E-mails suspeitos:</strong> A {{ app_name() }} envia ao usuário apenas e-mails com mensagens publicitárias, divulgando produtos e serviços ou atualizando informações. A {{ app_name() }} não envia mensagens do tipo:

	        							<ul>
	        								<li>Solicitando dados pessoais do Usuário.</li>
	        								<li>Solicitando a senha ou dados financeiros do Usuário.</li>
	        								<li>Com arquivos anexos exceto documentos em PDF.</li>
	        								<li>Com links para download de arquivos.</li>
	        							</ul>

	        							<p>Caso receba um e-mail com tais características, desconsidere-o e entre em contato com a {{ app_name() }}.</p>

	        							<p><strong>Cartões de crédito:</strong> A {{ app_name() }} não armazena em sua base de dados informações financeiras do usuário, como as informações referentes a cartões de crédito. O procedimento de aprovação do pagamento ocorre entre o usuário, os bancos e as administradoras de cartões, sem intervenção da {{ app_name() }}.</p>

	        							<p><strong>Impossibilidade de responsabilização:</strong> Em que pese os maiores esforços da {{ app_name() }}, o atual estágio da tecnologia não permite que se crie uma base de dados absolutamente segura contra ataques. Desta forma, a {{ app_name() }} exime-se de qualquer responsabilidade por danos eventualmente causados por terceiros, inclusive por invasões no site ou na base de dados, por vírus ou por vazamento de informações, a menos que fique comprovada exclusiva culpa da {{ app_name() }}.</p>
	        						</footer>
	        					</section>
	        					<section id="direito-dados">
	        						<header>
	        							<h2 class="subtitle">6. Direitos das pessoas sobre os dados coletados</h2><hr>
	        						</header>
	        						<footer>
	        							<p>A {{ app_name() }} permite que o usuário faça diferentes tipos de cadastro, contendo mais ou menos informações de acordo com seu próprio objetivo no site. Assim, o Usuário tem a possibilidade de escolher a forma de cadastro, devendo preenchê-lo com informações verídicas e atualizadas. O Usuário declara ser o legítimo titular de seus dados pessoais e poderá, a qualquer momento, utilizar as ferramentas do site para editá-los, atualizá-los ou removê-los preventivamente de nossa base de dados. A {{ app_name() }} manterá os dados preventivamente removidos em sigilo pelo prazo de seis meses, para atender obrigações legais de guarda obrigatória, descartando-os definitivamente após tal período.</p>
	        						</footer>
	        					</section>
	        					<section id="uso-dados">
	        						<header>
	        							<h2 class="subtitle">7. Uso de dados em caso de alteração de controle da {{ app_name() }}</h2><hr>
	        						</header>
	        						<footer>
	        							<p>Os dados coletados podem ser eventualmente transferidos a um terceiro em caso de alteração do controle, de uma aquisição, de uma incorporação, de uma fusão ou de uma venda de ativos da {{ app_name() }} sob qualquer meio ou forma.</p>
	        						</footer>
	        					</section>
	        				</footer>
	        			</section>
	        		</header>
	        	</div>
	        </div>
		</div>
	</div>
</section>
@endsection