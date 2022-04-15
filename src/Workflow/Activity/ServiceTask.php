<?php
/*
 * Copyright (c) Atsuhiro Kubo <kubo@iteman.jp> and contributors,
 * All rights reserved.
 *
 * This file is part of Workflower.
 *
 * This program and the accompanying materials are made available under
 * the terms of the BSD 2-Clause License which accompanies this
 * distribution, and is available at http://opensource.org/licenses/BSD-2-Clause
 */

namespace PHPMentors\Workflower\Workflow\Activity;

/**
 * @since Class available since Release 1.2.0
 */
class ServiceTask extends OperationalTask
{
    protected string $serviceClass;

    public function getServiceClass(): string
    {
        return $this->serviceClass;
    }
}
