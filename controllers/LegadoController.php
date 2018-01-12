<?php
/**
 * Controller Manual Legado
 * (Exemplo de Utiliza��o do Layout)
 * @author emanuel.sampaio - Politec
 * @since 27/05/2011
 * @version 1.0
 * @package application
 * @subpackage application.controller
 * @link http://salic.cultura.gov.br
 * @copyright � 2011 - Minist�rio da Cultura - Todos os direitos reservados.
 */

class SalicMincLayout_LegadoController extends MinC_Controller_Action_Abstract
{
	/**
	 * Reescreve o m�todo init()
	 * @access public
	 * @param void
	 * @return void
	 */
	public function init()
	{
		// configura��es do layout padr�o
//		Zend_Layout::startMvc(array('layout' => 'layout_login'));

		parent::init(); // chama o init() do pai GenericControllerNew
	} // fecha m�todo init()



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
	} // fecha m�todo formulariosAction()



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
	} // fecha m�todo modalAction()

} // fecha class