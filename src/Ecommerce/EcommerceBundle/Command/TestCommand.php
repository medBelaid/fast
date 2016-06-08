<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 02/06/2016
 * Time: 16:20
 */

namespace Ecommerce\EcommerceBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends ContainerAwareCommand{
    protected function configure(){
        $this->setName('ecommerce:facture')
            ->setDescription('Ceci est un premier test')
            ->addArgument('date',InputArgument::OPTIONAL, 'Date pour laquel vous souhaitez récuperer de facture');
    }
    protected function execute(InputInterface $input, OutputInterface $output){
      //$date = new \DateTime();
      $em = $this->getContainer()->get('doctrine')->getManager();
      $facture = $em->getRepository('EcommerceBundle:Commandes')->find(2);
      $this->getContainer()->get('setNewFacture')->facture($facture)->output('Facturation/facture.pdf','F');

    }
}