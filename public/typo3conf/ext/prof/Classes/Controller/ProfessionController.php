<?php
namespace Botb\Prof\Controller;


/***
 *
 * This file is part of the "Profession" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2021 
 *
 ***/
/**
 * ProfessionController
 */
class ProfessionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * professionRepository
     * 
     * @var \Botb\Prof\Domain\Repository\ProfessionRepository
     */
    protected $professionRepository = null;

    /**
     * @param \Botb\Prof\Domain\Repository\ProfessionRepository $professionRepository
     */
    public function injectProfessionRepository(\Botb\Prof\Domain\Repository\ProfessionRepository $professionRepository)
    {
        $this->professionRepository = $professionRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $professions = $this->professionRepository->findAll();
        $this->view->assign('professions', $professions);
    }

    /**
     * action show
     * 
     * @param \Botb\Prof\Domain\Model\Profession $profession
     * @return void
     */
    public function showAction(\Botb\Prof\Domain\Model\Profession $profession)
    {
        $this->view->assign('profession', $profession);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param \Botb\Prof\Domain\Model\Profession $newProfession
     * @return void
     */
    public function createAction(\Botb\Prof\Domain\Model\Profession $newProfession)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->professionRepository->add($newProfession);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \Botb\Prof\Domain\Model\Profession $profession
     * @ignorevalidation $profession
     * @return void
     */
    public function editAction(\Botb\Prof\Domain\Model\Profession $profession)
    {
        $this->view->assign('profession', $profession);
    }

    /**
     * action update
     * 
     * @param \Botb\Prof\Domain\Model\Profession $profession
     * @return void
     */
    public function updateAction(\Botb\Prof\Domain\Model\Profession $profession)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->professionRepository->update($profession);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Botb\Prof\Domain\Model\Profession $profession
     * @return void
     */
    public function deleteAction(\Botb\Prof\Domain\Model\Profession $profession)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->professionRepository->remove($profession);
        $this->redirect('list');
    }
}
