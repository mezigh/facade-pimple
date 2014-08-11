<?php

namespace Devmedia;
 
interface Visitable
{
     function accept(Visitor $visitor);
    
} 