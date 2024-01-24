# Rmdm-barra-brasil
Implementa http://barra.governoeletronico.gov.br/ em sites Wordpress. Distribuído sob a licença GPL2.

## Instalação
Recomenda-se a instalação no Wordpress como *mu-plugin* dado que plugins deste tipo não podem ser desativados, mesmo por usuários que possuam perfil administrador no Wordpress. Também não é necessário ativá-lo, já que este tipo de plugin é ativado por padrão.

Para instalar, proceda da seguinte forma:
1. Faça o download do Rmdm-Barra-Brasil e extraia o seu conteúdo.
2. Na instalação do Wordpress, localize a pasta **wp-content** e crie a pasta **mu-plugins**, dentro dela.
3. Copie todo o conteúdo extraído para dentro da pasta **mu-plugins** criada na instalação do Wordpress.
4. Verifique o site, a barra já deve estar disponível.

Como referência, a estrutura de arquivos e pastas deverá ser como essa:
```
.
└── wp-content
    └── mu-plugins
        ├── LICENSE
        ├── README.md
        ├── rmdm-barra-brasil
        │   ├── barra-brasil-IDG1
        │   │   ├── barra-brasil-idg1.php
        │   │   └── frontend
        │   │       ├── css
        │   │       │   └── RmdmBarraBrasil.css
        │   │       └── js
        │   │           └── RmdmBarraBrasil.js
        │   ├── barra-brasil-IDG2
        │   │   ├── barra-brasil-idg2.php
        │   │   └── frontend
        │   │       ├── css
        │   │       │   └── RmdmBarraBrasil.css
        │   │       └── js
        │   │           └── RmdmBarraBrasil.js
        │   └── rmdm-barra-brasil.php
        └── rmdm-barra-brasil-index.php
```
Também é possível instalar a barra brasil como simples plugin, procedendo da seguinte maneira:
1. Faça o download do Rmdm-Barra-Brasil e extraia o seu conteúdo.
2. Na instalação do Wordpress, localize a pasta **plugins** dentro de **wp-content**.
3. Do conteúdo extraído, copie apenas a pasta **rmdm-barra-brasil** para a pasta **plugins** do Wordpress.
4. No dashboard do Wordpress, clique na opção Plugins, localize o item **Barra Brasil para WordPress** e ative-o.
5. Verifique o site, a barra já deve estar disponível.

## Configuração
A versão IDG2 da barra brasil é ativada por padrão. Caso queira trocar, proceda da seguinte forma:
1. Abra o Dashboard do Wordpress.
2. Clique na opção **Barra Brasil Config** dentro do menu **Configurações**. 
3. Localize na página de configuração do plugin o item **Modelo de Barra Brasil** com um dropdown.
4. Altere para a versão desejada e clique em **Salvar alterações**
5. Verifique no site a versão da barra escolhida.

## Sobre a barra brasil
Texto retirado da [documentação](https://barra.governoeletronico.gov.br/atualize.html#:~:text=A%20barra%20de%20Identidade%20Visual,e%20portais%20do%20Governo%20Federal.) da barra no Governo Eletrônico:

A barra de Identidade Visual do Governo Federal na Internet tem a função de identificar, padronizar e integrar sítios e portais do Governo Federal. A barra também tem a função de proporcionar acesso direto ao Portal Brasil - brasil.gov.br, às informações públicas de acordo com a Lei de acesso à informação, aos canais de participação social, ao portal de serviços prestados pelos diversos órgãos - servicos.gov.br/, página com toda a legislação brasileira - planalto.gov.br/legislacao/ e link para os canais de comunicação do Governo Federal. Seu uso está normatizado por meio da Instrução Normativa nº 8, de 19 de dezembro de 2014, que pode ser encontrada no sítio da Secretaria de Comunicação Social da Presidência da República - Secom.

Com o objetivo de padronizar a codificação e garantir a aderência às normas da Administração Pública, a nova versão da barra utiliza uma arquitetura integrada e dinâmica, não precisa ser desenvolvida, pois sua funcionalidade encontra-se corretamente configurada e pronta para uso.

A publicação da barra pelos órgãos deverá ser feita de maneira dinâmica por meio da inclusão do código publicado no item Instruções para Uso da Barra no HTML do sítio ou portal.

Após esta primeira publicação, as demais atualizações serão automáticas.

A barra funciona de maneira unificada. Todos os sítios e portais que utilizam esta versão apresentam os conteúdos uniformizados.
