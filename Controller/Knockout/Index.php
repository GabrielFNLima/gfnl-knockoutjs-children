<?php

namespace GFNL\KnockoutJsChild\Controller\Knockout;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\NotFoundException;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action implements HttpGetActionInterface
{
    public function __construct(
        Context                                     $context,
        \Magento\Framework\Controller\ResultFactory $resultFactory,
        PageFactory                                 $resultPageFactory,
    )
    {
        parent::__construct($context);
        $this->_pageFactory = $resultPageFactory;
        $this->resultFactory = $resultFactory;
    }

    /**
     * Execute action based on request and return result
     *
     * @return ResultInterface|ResponseInterface
     * @throws NotFoundException
     */
    public function execute()
    {
        return $this->_pageFactory->create();
    }
}
