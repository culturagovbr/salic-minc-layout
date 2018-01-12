<?php

class SalicMincLayout_IndexController extends MinC_Controller_Action_Abstract
{
	public function init()
	{
		// configura��es do layout padr�o
//		Zend_Layout::startMvc(array('layout' => 'layout_login'));

		parent::init(); // chama o init() do pai GenericControllerNew
        $this->view->bodyClass = 'large-menu';
	}

	/**
	 * P�gina inicial
	 * @access public
	 * @param void
	 * @return void
	 */
	public function indexAction()
	{
	} // fecha m�todo indexAction()



	/**
	 * P�gina Simples
	 * @access public
	 * @param void
	 * @return void
	 */
	public function paginaSimplesAction()
	{
        $this->view->bodyClass = '';
	} // fecha m�todo paginaSimplesAction()



	/**
	 * P�gina com Menu Lateral
	 * @access public
	 * @param void
	 * @return void
	 */
	public function paginaMenuLateralAction()
	{
	} // fecha m�todo paginaMenuLateralAction()



	/**
	 * Menu Lateral
	 * @access public
	 * @param void
	 * @return void
	 */
	public function menuLateralAction()
	{
	} // fecha m�todo menuLateralAction()


    /**
     * Menu Lateral Reduzido
     * @access public
     * @param void
     * @return void
     */
    public function menuLateralReduzidoAction()
    {
        $this->view->bodyClass = 'small-menu';
    } // fecha m�todo menuLateralReduzidoAction()

	/**
	 * Mensagens
	 * @access public
	 * @param void
	 * @return void
	 */
	public function mensagensAction()
	{
	} // fecha m�todo mensagensAction()



	/**
	 * Menu de Abas
	 * @access public
	 * @param void
	 * @return void
	 */
	public function menuAbas1Action()
	{
	} // fecha m�todo menuAbas1Action()

	public function menuAbas2Action()
	{
	} // fecha m�todo menuAbas2Action()

	public function menuAbas3Action()
	{
	} // fecha m�todo menuAbas3Action()

	public function menuAbas4Action()
	{
	} // fecha m�todo menuAbas4Action()



	/**
	 * Formul�rios
	 * @access public
	 * @param void
	 * @return void
	 */
	public function formulariosAction()
	{
	}

    public function formularioPadraoAction()
    {
    }

    public function formularioMaterializeAction()
    {
    }


	/**
	 * M�scaras em JavaScript
	 * @access public
	 * @param void
	 * @return void
	 */
	public function mascarasJsAction()
	{
	} // fecha m�todo mascarasJsAction()



	/**
	 * M�scaras em PHP
	 * @access public
	 * @param void
	 * @return void
	 */
	public function mascarasPhpAction()
	{
	} // fecha m�todo mascarasPhpAction()



	/**
	 * Tabelas
	 * @access public
	 * @param void
	 * @return void
	 */
	public function tabelasAction()
	{
	} // fecha m�todo tabelasAction()

    /**
     * Datatables
     * @access public
     * @param void
     * @return void
     */
    public function dataTablesAction()
    {
        $this->view->bodyClass = 'nano-menu';

    } // fecha m�todo tabelasAction()


	/**
	 * Grids
	 * @access public
	 * @param void
	 * @return void
	 */
	public function gridsAction()
	{
	} // fecha m�todo gridsAction()



	/**
	 * Planilha
	 * @access public
	 * @param void
	 * @return void
	 */
	public function planilhaAction()
	{
	} // fecha m�todo planilhaAction()



	/**
	 * Modal
	 * @access public
	 * @param void
	 * @return void
	 */
	public function modalAction()
	{
	}

	/**
	 * Modal
	 * @access public
	 * @param void
	 * @return void
	 */
	public function buttonsAction()
	{
	}
}
