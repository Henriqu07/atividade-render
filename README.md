# Atividade Cloud Computing — PHP + Docker + Render

Projeto simples de PHP para publicação em um Render Web Service usando Docker.

## Arquivos
- `index.php`: página web PHP.
- `Dockerfile`: imagem e configuração Apache/PHP na porta 10000.

## Publicação
1. Crie um repositório no GitHub e envie estes arquivos para a branch `main`.
2. No Render, escolha **New > Web Service** e conecte o repositório.
3. Selecione **Docker** como runtime e o plano **Free**.
4. Crie o serviço e aguarde o deploy.
5. Abra o endereço `https://<nome-do-servico>.onrender.com`.

O endereço final é definido pelo Render durante a criação do serviço.
