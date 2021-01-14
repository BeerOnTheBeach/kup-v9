<?php
namespace Botb\Prof\Tests\Unit\Controller;

/**
 * Test case.
 */
class ProfessionControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Botb\Prof\Controller\ProfessionController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Botb\Prof\Controller\ProfessionController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllProfessionsFromRepositoryAndAssignsThemToView()
    {

        $allProfessions = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $professionRepository = $this->getMockBuilder(\Botb\Prof\Domain\Repository\ProfessionRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $professionRepository->expects(self::once())->method('findAll')->will(self::returnValue($allProfessions));
        $this->inject($this->subject, 'professionRepository', $professionRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('professions', $allProfessions);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenProfessionToView()
    {
        $profession = new \Botb\Prof\Domain\Model\Profession();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('profession', $profession);

        $this->subject->showAction($profession);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenProfessionToProfessionRepository()
    {
        $profession = new \Botb\Prof\Domain\Model\Profession();

        $professionRepository = $this->getMockBuilder(\Botb\Prof\Domain\Repository\ProfessionRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $professionRepository->expects(self::once())->method('add')->with($profession);
        $this->inject($this->subject, 'professionRepository', $professionRepository);

        $this->subject->createAction($profession);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenProfessionToView()
    {
        $profession = new \Botb\Prof\Domain\Model\Profession();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('profession', $profession);

        $this->subject->editAction($profession);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenProfessionInProfessionRepository()
    {
        $profession = new \Botb\Prof\Domain\Model\Profession();

        $professionRepository = $this->getMockBuilder(\Botb\Prof\Domain\Repository\ProfessionRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $professionRepository->expects(self::once())->method('update')->with($profession);
        $this->inject($this->subject, 'professionRepository', $professionRepository);

        $this->subject->updateAction($profession);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenProfessionFromProfessionRepository()
    {
        $profession = new \Botb\Prof\Domain\Model\Profession();

        $professionRepository = $this->getMockBuilder(\Botb\Prof\Domain\Repository\ProfessionRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $professionRepository->expects(self::once())->method('remove')->with($profession);
        $this->inject($this->subject, 'professionRepository', $professionRepository);

        $this->subject->deleteAction($profession);
    }
}
