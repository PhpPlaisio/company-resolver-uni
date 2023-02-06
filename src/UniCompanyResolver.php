<?php
declare(strict_types=1);

namespace Plaisio\CompanyResolver;

/**
 * Company resolver for website with a single domain only.
 */
#[\AllowDynamicProperties]
class UniCompanyResolver implements CompanyResolver
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Object constructor.
   *
   * @param int $cmpId The ID of the company.
   *
   * @api
   * @since 1.0.0
   */
  public function __construct(int $cmpId)
  {
    $this->cmpId = $cmpId;
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
