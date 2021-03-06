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
   * Test case for $cmp_id property.
   */
  public function testGetCompany(): void
  {
    $resolver = new UniCompanyResolver(self::CMP_ID_SYS);

    $this->assertSame(self::CMP_ID_SYS, $resolver->cmpId);
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
