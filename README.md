# wolko.base
Base para iniciar projetos básicos utilizando codeigniter 3.1.8 ou superior.


Ui
---

> <php $this->ui->alert_flashdata()?>
Procura por flashdatas 'danger', 'warning', 'success', 'info', 'help' e renderiza um painel elegante com o conteúdo.

> <php $this->ui->disabled($disable, $disabled)?>
Retorna disabled se os argumentos forem iguais (Uso em botões, inputs)

> <php $this->ui->hidden($hidden, $hiddened)?>
Retorna hidden se os argumentos forem iguais (Uso em elementos html)

> <php $this->ui->checked($check)?>
Escreve checked se argumento for 'TRUE' (Uso em checkbox)

> <php $this->ui->selected($select, $selected)?>
Escreve selected se argumentos forem iguais. (Uso em <option>)

> <php $this->ui->active($active, $actived)?>
Escreve active se argumentos forem iguais (Uso em breadcrumbs)

> <php $this->ui->colapsed($colapse, $colapsed)?>
Escreve colapsed se argumentos forem iguais (Uso em componentes css)


Password
---

> <php $this->password->create($input)?>
Criptografa de forma segura um input qualquer.

> <php $this->password->check($input, $database)?>
Checa se o input é igual ao dado criptografado no banco de dados.


Mail
---

> <php $this->mail->enviar($destinatario, $assunto, $mensagem, $anexo = '')?>
Abstração que utiliza a librarie Mail do CI


Datetime
---

> <?php $this->datetime->db_para_ui($datetime_db)?>
0000-00-00 00:00:00 -> 00/00/0000 00:00:00

> <?php $this->datetime->ui_para_db($datetime_ui)?>
00/00/0000 -> 0000-00-00

> <?php $this->datetime->diferenca($date_1, $date_2)?>
Retorna a diferença entre duas datas

> <?php $this->datetime->dias_do_ano($ano)?>
Retorna um array com todos os dias do ano por mês

> <?php $this->datetime->meses_do_ano($ano)?>
Retorna um array com todos os meses do ano EX: ['janeiro' => 2018-01, 'fevereiro' => 2018-02 ...]


Debug
---

> <?php debug_session() ?>
Use para debugar sua sessao.

> <?php debug_cookie() ?>
Use para debugar seus cookies.

> <?php debug_var($var) ?>
Use para debugar qualquer variável.
