<?php
declare(strict_types=1);

namespace Plaisio\CompanyResolver\Test;

use PHPUnit\Framework\TestCase;
use Plaisio\CompanyResolver\UniCompanyResolver;

/**
 * Test cases for class UniCompanyResolver.
 */
class UniCompanyResolverTest extends TestCase
{
  //--------------------------------------------------------------------------------------------------------------------
  const CMP_ID_SYS = 1;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * getCompany must return 'SYS' always.
   */
  public function testGetCompany()
  {
    $resolver = new UniCompanyResolver(self::CMP_ID_SYS);

    $this->assertSame(self::CMP_ID_SYS, $resolver->getCmpId());
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
