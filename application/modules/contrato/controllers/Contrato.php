<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contrato extends MX_Controller
{
	function __construct()
	{
		$this->load->library(array('form_validation', 'pagination'));
		$this->load->model('ContratoModel', 'contrato');
	}

	public function index()
	{
		$this->data['tipos_contrato'] = $this->contrato->readTiposContrato();
		dump($this->data['tipos_contrato']);
		die();

		$this->load->view('contrato/index', $this->data);
	}

	public function create()
	{
		//primeiro bloco: "Perfil Usuário" (legendas das regras: required: obrigatório | trim: remove espaços em branco)
		$this->form_validation->set_rules('nome_fornecedor', 'Nome/Razão Social', 'trim');
		$this->form_validation->set_rules('tipo_contrato', 'Tipo do Contrato', 'trim');
		$this->form_validation->set_rules('valor', 'Valor do Contrato', 'trim');
		$this->form_validation->set_rules('data_inicial', 'Usuário', 'trim');
		$this->form_validation->set_rules('data_vencimento', 'Senha', 'trim');
		$this->form_validation->set_rules('diluir_valor', 'Diluir Valor', 'trim');
		$this->form_validation->set_rules('anexo ', 'Anexo do Contrato', 'trim');

		if ($this->form_validation->run() == true) {

			$dados = array(
				'nome_fornecedor' => $this->input->post('nome_fornecedor'),
				'tipo_contrato' => $this->input->post('tipo_contrato'),
				'valor' => $this->input->post('valor'),
				'data_inicial' => $this->input->post('data_inicial'),
				'data_vencimento' => $this->input->post('data_vencimento'),
				'diluir_valor' => md5($this->input->post("diluir_valor")),
				'anexo' => $this->input->post('anexo'),
				'cadastrado_em' => date('Y-m-d H:i:s')
			);
			$this->contrato->create($dados);
			redirect('home');
		}
		$this->load->view('contrato/index', $this->data);
	}
}
