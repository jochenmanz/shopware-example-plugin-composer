<?php

namespace ExamplePlugin;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Service
 *
 * @package PlentyConnector
 */
class ExampleCommand extends Command
{
    /**
     * @var Service
     */
    private $service;

    /**
     * Service constructor.
     */
    public function __construct(Service $service)
    {
        $this->service = $service;

        parent::__construct();
    }

    /**
     * @throws \Symfony\Component\Console\Exception\InvalidArgumentException
     */
    protected function configure()
    {
        $this->setName('example:test');
        $this->setDescription('test command');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {

    }
}
