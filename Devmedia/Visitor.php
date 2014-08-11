<?php

namespace Devmedia;

interface Visitor
{
    function visit(Visitable $visitee);
}