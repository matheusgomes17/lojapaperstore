@extends('frontend.layouts.app')

@section('title') :: Termos e Condições de Uso @endsection

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
	        					<h1 class="title">Termos e Condições de Uso do Site</h1><hr><br><br>
	        				</header>
	        				<footer>
	        					<section>
	        						<header>
	        							<h1 class="subtitle">Sumário</h1><hr>
	        						</header>
	        						<footer>
	        							<ul>
	        								<li><a href="#apresentacao">Apresentação e definições</a></li>
	        								<li><a href="#regras">Regras de utilização do Site</a></li>
	        								<li><a href="#cadastro-cliente">Cadastro de Clientes</a></li>
	        								<li><a href="#dados-pessoais">Dados pessoais, privacidade e segurança</a></li>
	        								<li><a href="#ofertas">Oferta de produtos</a></li>
	        								<li><a href="#estoque">Estoque</a></li>
	        								<li><a href="#promocoes">Promoções</a></li>
	        								<li><a href="#internet">Aplicações de Internet ou vírus de computador</a></li>
	        								<li><a href="#duracao">Duração</a></li>
	        								<li><a href="#atualizacao">Atualizações destes Termos e Condições</a></li>
	        								<li><a href="#lei">Lei aplicável e Foro de Eleição</a></li>
	        							</ul><br><br><br>
	        						</footer>
	        					</section>
	        					<section id="apresentacao">
	        						<header>
	        							<h1 class="subtitle">1. Apresentação e definições</h1><hr>
	        						</header>
	        						<footer>
	        							<p>Este site é de propriedade, mantido, e operado por {{ app_name() }} Decoração em Papel de Parede, com endereço na Rua Porangaba, 781 D, Vila Industrial. CEP: 16072-475. Araçatuba - SP, inscrita no CNPJ/MF sob o nº 22.312.365/0001-94, com Inscrição Estadual nº 177.343.622-116 e endereço de e-mail contato@lojapaperstore.com.br. Este documento relaciona os termos e condições que devem ser observados pela {{ app_name() }} e pelos usuários (conforme definição abaixo) na utilização do site, de suas ferramentas e de suas funcionalidades. A {{ app_name() }} faculta acesso e utilização do site a quaisquer usuários. O usuário declara ter lido e aceito estes Termos e Condições de Uso e das Políticas antes de ter iniciado a utilização do site. Caso o usuário não aceite estes Termos e Condições de Uso, não lhe será permitido acesso a áreas restritas do site. Para os fins destes Termos e Condições de Uso, bem como das Políticas, os termos abaixo terão os seguintes significados:</p>

	        							<p><strong>Clientes:</strong> usuários que preencheram o cadastro e detêm uma conta de acesso.</p>

	        							<p><strong>Compra:</strong> Transação por meio da qual um cliente adquire um produto oferecido à venda, mediante a realização de pagamento do valor do produto.</p>

	        							<p><strong>Conta de Acesso:</strong> Credencial definida pelo e-mail de usuário (login) e senha de um visitante cadastrado (Cliente), pessoal e intransferível, que permite acesso à área restrita e às funcionalidades exclusivas no site, tais como acesso e alteração de dados pessoais, criação de orçamentos, entre outras.</p>

	        							<p><strong>{{ app_name() }}:</strong> A {{ app_name() }} Decoração em Papel de Parede.</p>

	        							<p><strong>Marca:</strong> Quaisquer sinais distintivos de titularidade da e/ou licenciados à {{ app_name() }}, que sejam utilizados na identificação do site, de seu conteúdo ou de serviço prestado pela {{ app_name() }}.</p>

	        							<p><strong>Políticas:</strong> As políticas que complementam e integram estes Termos e Condições de Uso, nominalmente Política de Entrega de Produtos e a Política de Privacidade e Segurança, todas disponíveis no site.</p>

	        							<p><strong>Propriedade Intelectual da {{ app_name() }}:</strong> Todos os bens de propriedade intelectual de titularidade da {{ app_name() }}, de qualquer empresa pertencente a seu grupo econômico, ou, ainda, de terceiro, cujo uso seja licenciado e/ou autorizado à {{ app_name() }}, incluindo mas não se limitando a marcas, patentes, invenções ou modelos de utilidade, desenhos industriais, segredos de negócio, ilustrações, fotografias e/ou conteúdos de qualquer tela do site ou quaisquer obras intelectuais ou outros conteúdos que estejam inseridos em qualquer obra intelectual ou qualquer bem protegido por direitos de propriedade intelectual.</p>

	        							<p><strong>Site:</strong> O website de propriedade, mantido e operado por {{ app_name() }}, hospedado no domínio [<strong>lojapaperstore.com.br</strong>] e todas as páginas nele compreendidas.</p>

	        							<p><strong>Usuários:</strong> Quaisquer pessoas que acessem o site, incluindo visitantes anônimos e clientes.</p>
	        						</footer>
	        					</section>
	        					<section id="regras">
	        						<header>
	        							<h1 class="subtitle">2. Regras de utilização do Site</h1><hr>
	        						</header>
	        						<footer>
	        							<p>O usuário obriga-se a utilizar o site respeitando e observando estes Termos e Condições de Uso, bem como a legislação vigente, os costumes e a ordem pública. Desta forma, o usuário concorda que não poderá:</p>

	        							<ul>
	        								<li>Lesar direitos de terceiros, independentemente de sua natureza, em qualquer momento, inclusive no decorrer do uso do site</li>
	        								<li>Executar atos que limitem ou impeçam o acesso e a utilização do Site, em condições adequadas, aos demais usuários.</li>
	        								<li>Acessar ilicitamente o Site ou sistemas informáticos de terceiros relacionados ao site ou à {{ app_name() }} sob qualquer meio ou forma.</li>
	        								<li>Difundir programas ou vírus informáticos suscetíveis de causar danos de qualquer natureza, inclusive em equipamentos e sistemas da {{ app_name() }} ou de terceiros</li>
	        								<li>Utilizar mecanismos que não os expressamente habilitados ou recomendados no site para obtenção de informações, conteúdos e serviços.</li>
	        								<li>Realizar quaisquer atos que de alguma forma possam implicar qualquer prejuízo ou dano à {{ app_name() }} ou a outros usuários.</li>
	        								<li>Acessar áreas de programação do site, bases de dados ou qualquer outro conjunto de informações que escape às áreas públicas ou restritas do site.</li>
	        								<li>Realizar ou permitir engenharia reversa, traduzir, modificar, alterar a linguagem, compilar, decompilar, modificar, reproduzir, alugar, sublocar, divulgar, transmitir, distribuir, usar ou, de outra maneira, dispor do site ou das ferramentas e funcionalidades nele disponibilizadas sob qualquer meio ou forma, inclusive de modo a violar direitos da {{ app_name() }} (inclusive de Propriedade Intelectual da {{ app_name() }}) e/ou de terceiros.</li>
	        								<li>Praticar ou participar de qualquer ato que constitua uma violação de qualquer direito da {{ app_name() }} (inclusive de Propriedade Intelectual da {{ app_name() }}) ou de terceiros ou ainda de qualquer lei aplicável, ou agir sob qualquer meio ou forma que possa contribuir com tal violação.</li>
	        								<li>Interferir na segurança ou cometer usos indevidos contra o site ou qualquer recurso do sistema, rede ou serviço conectado ou que possa ser acessado por meio do site, devendo acessar o site apenas para fins lícitos e autorizados.</li>
	        								<li>Utilizar o domínio da {{ app_name() }} para criar links ou atalhos a serem disponibilizados em e-mails não solicitados (mensagens spam) ou em websites de terceiros ou do próprio usuário ou, ainda, para realizar qualquer tipo de ação que possa vir a prejudicar a {{ app_name() }} ou terceiros.</li>
	        								<li>Utilizar aplicativos automatizados de coleta e seleção de dados para realizar operações massificadas ou para quaisquer finalidades ou, ainda, para coletar e transferir quaisquer dados que possam ser extraídos do site para fins não permitidos ou ilícitos.</li>
	        								<li>Utilizar as ferramentas e funcionalidades do site para difundir mensagens não relacionadas com o site ou com as finalidades do site, incluindo mensagens de cunho racista, étnico, político, religioso, cultural ou depreciativo, difamatório e/ou calunioso de qualquer pessoa ou grupo social.</li>
	        							</ul><br>

	        							<p>O Usuário concorda em indenizar, defender e isentar a {{ app_name() }} de qualquer reclamação, notificação, intimação ou ação judicial ou extrajudicial, ou ainda de qualquer responsabilidade, dano, custo ou despesa decorrente de qualquer violação e/ou infração cometida pelo usuário ou qualquer pessoa agindo em seu nome, com seu consentimento ou tolerância, em relação ao site (inclusive com relação a qualquer disposição destes Termos e Condições de Uso), inclusive qualquer pessoa que tenha obtido os dados do usuário relacionados a sua conta de acesso ou a sua navegação no site.</p>

  										<p>A {{ app_name() }} poderá, a seu exclusivo critério, bloquear, restringir, desabilitar ou impedir o acesso de qualquer usuário ao site, total ou parcialmente, sem qualquer aviso prévio, sempre que for detectada uma conduta inadequada do usuário, sem prejuízo das medidas administrativas, extrajudiciais e judiciais que julgar convenientes.</p>
	        						</footer>
	        					</section>
	        					<section id="cadastro-cliente">
	        						<header>
	        							<h1 class="subtitle">3. Cadastro de Clientes</h1><hr>
	        						</header>
	        						<footer>
	        							<p>Para obter acesso ao conteúdo completo e a todas as ferramentas e funcionalidades do site o usuário deverá criar uma conta com dados pessoais, os quais serão armazenados e utilizados para identificação das compras, a serem usados nos termos da Política de Privacidade e Segurança, ressaltando-se que a criação de cada conta pressupõe o consentimento expresso sobre coleta, uso, armazenamento e tratamento de dados pessoais pela {{ app_name() }} e/ou por terceiros por ela contratados para realizar qualquer procedimento ou processo relacionado às compras, inclusive processamento de pagamentos, entregas, devoluções etc.. A cada cliente é permitida a criação de apenas uma conta de acesso e a {{ app_name() }} se reserva o direito de suspender ou cancelar quaisquer contas de acesso em duplicidade. Ao completar a sua conta de acesso, o cliente declara que as informações fornecidas são completas, verdadeiras, atuais e precisas, sendo de total responsabilidade do cliente a atualização dos dados de sua conta de acesso sempre que houver modificação de nome, endereço ou qualquer outra informação relevante. A {{ app_name() }} poderá recusar, suspender ou cancelar a conta de acesso de um cliente sempre que suspeitar que as informações fornecidas são falsas, incompletas, desatualizadas ou imprecisas ou ainda nos casos indicados nas leis e regulamentos aplicáveis, nestes Termos e Condições ou em qualquer política do site, mesmo que previamente aceito. O cliente, no momento da criação de sua conta de acesso, determinará seu e-mail de usuário e sua senha de acesso. É de exclusiva responsabilidade do cliente a manutenção do sigilo do e-mail de usuário e/ou da senha de acesso relativos à sua conta de acesso, devendo o cliente comunicar imediatamente a {{ app_name() }} em caso de perda, divulgação ou roubo da senha ou ainda de uso não autorizado de sua conta. Menores (idade inferior a 18 anos) não poderão utilizar o site, a menos que sejam representados e/ou assistidos por seus pais ou responsáveis legais e por estes autorizados no momento da criação da conta. A efetivação de uma conta em nome de um menor pressupõe a representação deste menor por uma pessoa maior de 18 anos, que será reputada responsável civil e criminalmente por qualquer compra realizada, violação cometida ou declaração falsa, incompleta, desatualizada ou imprecisa prestada pelo menor de 18 anos.</p>
	        						</footer>
	        					</section>
	        					<section id="dados-pessoais">
	        						<header>
	        							<h1 class="subtitle">4. Dados pessoais, privacidade e segurança</h1><hr>
	        						</header>
	        						<footer>
	        							<p>A {{ app_name() }} dispõe de uma política específica para regular a coleta, guarda e utilização de dados pessoais, bem como a sua segurança: Política de Privacidade e Segurança. Essa política específica integra inseparavelmente estes Termos e Condições de Uso, ressaltando-se que os dados de utilização do site serão arquivados nos termos da legislação em vigor.</p>
	        						</footer>
	        					</section>
	        					<section id="ofertas">
	        						<header>
	        							<h1 class="subtitle">5. Oferta de produtos</h1><hr>
	        						</header>
	        						<footer>
	        							<p>A {{ app_name() }} disponibilizará no site, para cada produto, uma página descritiva, da qual constarão informações relativas às suas características, composição, eventuais riscos que possa oferecer à saúde e à segurança, disponibilidade em estoque. A oferta de produtos será sempre limitada ao território em que a {{ app_name() }} disponibiliza entrega, nos termos do item 1 da Política de Entrega de Produtos, não sendo válida para as localidades não incluídas neste território. A {{ app_name() }} poderá, a seu exclusivo critério, alterar este território, incluindo ou excluindo localidades. Em caso de dúvida, o usuário poderá consultar a Política de Entrega de Produtos ou entrar em contato com telefone (18) 3608-5008.</p>
	        						</footer>
	        					</section>
	        					<section id="estoque">
	        						<header>
	        							<h1 class="subtitle">6. Estoque</h1><hr>
	        						</header>
	        						<footer>
	        							<p>A {{ app_name() }} possui uma grande quantidade de itens cadastrados no site. Por motivos alheios à vontade e ao controle da {{ app_name() }}, é possível que alguns destes itens fiquem temporariamente indisponíveis, em virtude de peculiaridades, sazonalidades ou problemas na cadeia de fornecimento. A {{ app_name() }} compromete-se a engajar seus melhores esforços para manter a disponibilidade da maior quantidade possível de itens.</p>
	        						</footer>
	        					</section>
	        					<section id="promocoes">
	        						<header>
	        							<h1 class="subtitle">7. Promoções</h1><hr>
	        						</header>
	        						<footer>
	        							<p>A {{ app_name() }} poderá, a qualquer momento, por motivos puramente comerciais e a seu exclusivo critério, criar e manter campanhas promocionais, oferecendo determinados produtos a preços inferiores aos usualmente praticados ou com a incidência de descontos. As promoções não serão cumulativas e poderão ser limitadas:</p>

	        							<ul>
	        								<li>A uma determinada quantidade de produtos em promoção.</li>
	        								<li>A um determinado período de tempo</li>
	        								<li>A aceitação de condições especiais, como a impossibilidade de troca do produto.</li>
	        							</ul><br>

	        							<p>As condições de validade das promoções serão claramente veiculadas por todos os meios de divulgação das promoções e a {{ app_name() }} recomenda a sua atenta leitura pelo usuário. Em caso de dúvidas, o usuário pode entrar em contato com o telefone (18) 3608-5008.</p>

										<p>As promoções para compras no site serão restritas ao território em que a {{ app_name() }} disponibiliza entrega, nos termos do item 1 da Política de Entrega de Produtos, não sendo válida para as localidades não incluídas neste território.</p>

										<p>Nos casos de trocas (quando autorizadas pelas condições da promoção) ou devoluções de produtos adquiridos por valores ou condições promocionais, será considerado como valor de compra aquele efetivamente pago pelo cliente, ficando descartado para este fim o valor originalmente cobrado pelo produto em questão.</p>
	        						</footer>
	        					</section>
	        					<section id="internet">
	        						<header>
	        							<h1 class="subtitle">8. Aplicações de Internet ou vírus de computador</h1><hr>
	        						</header>
	        						<footer>
	        							<p>Em virtude de dificuldades técnicas, aplicações de Internet ou problemas de transmissão, é possível ocorrer cópias inexatas ou incompletas das informações contidas no site. Vírus de computador ou outros programas danosos também poderão ser baixados inadvertidamente do site. A {{ app_name() }} não será responsável por qualquer aplicação, vírus de computador ou outros arquivos danosos ou invasivos ou programas que possam prejudicar ou afetar a utilização do computador ou outro bem dos usuários devido ao acesso, utilização ou navegação no site, ou ainda pelo download de qualquer material nele contido, sendo recomendada a instalação de aplicativos antivírus ou protetores adequados.</p>
	        						</footer>
	        					</section>
	        					<section id="duracao">
	        						<header>
	        							<h1 class="subtitle">9. Duração</h1><hr>
	        						</header>
	        						<footer>
	        							<p>Estes Termos e Condições de Uso e as Políticas têm duração indefinida e permanecerão em vigor enquanto o site estiver ativo. O acesso e a utilização do site e dos recursos por ele oferecidos têm, em principio, duração indeterminada, a exclusivo critério da {{ app_name() }}. A {{ app_name() }} reserva-se, no entanto, o direito de suspender e/ou cancelar, de forma unilateral e a qualquer momento, o acesso ao site ou a algumas de suas partes ou a alguns de seus recursos, sem necessidade de prévio aviso.</p>
	        						</footer>
	        					</section>
	        					<section id="atualizacao">
	        						<header>
	        							<h1 class="subtitle">10. Atualizações destes Termos e Condições</h1><hr>
	        						</header>
	        						<footer>
	        							<p>A {{ app_name() }} poderá unilateralmente revisar, aprimorar, modificar e/ou atualizar, a qualquer momento, qualquer cláusula ou disposição contidas nestes Termos e Condições de Uso ou nas Políticas. A versão atualizada valerá para o uso do site. A continuidade de acesso ou utilização deste site, depois da divulgação de quaisquer modificações, confirmará a aceitação dos novos Termos e Condições de Uso ou das novas Políticas pelos usuários. Caso um cliente não esteja de acordo com uma determinada alteração das Políticas ou dos Termos e Condições de Uso, poderá rescindir seu vínculo com a {{ app_name() }} por meio de pedido de exclusão da conta no site. Esta rescisão não eximirá, no entanto, o cliente de cumprir com todas as obrigações assumidas sob as versões precedentes das Políticas e dos Termos e Condições de Uso.</p>
	        						</footer>
	        					</section>
	        					<section id="lei">
	        						<header>
	        							<h1 class="subtitle">11. Lei aplicável e Foro de Eleição</h1><hr>
	        						</header>
	        						<footer>
	        							<p>O site é controlado, operado e administrado pela {{ app_name() }} na cidade de Araçatuba, Estado de São Paulo, Brasil, podendo ser acessado por qualquer dispositivo conectado à Internet, independentemente de sua localização geográfica. Em vista das diferenças que podem existir entre as legislações locais e nacionais, ao acessar o site, o usuário concorda que a legislação aplicável para fins destes Termos e Condições de Uso será aquela vigente na República Federativa do Brasil. A {{ app_name() }} e o usuário concordam que o Foro Central da Comarca de São Paulo, SP, Brasil, será o único competente para dirimir qualquer questão ou controvérsia oriunda ou resultante do uso do site, renunciando expressamente a qualquer outro, por mais privilegiado que seja, ou venha a ser.</p>
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