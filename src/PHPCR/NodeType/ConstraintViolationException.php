<?php
/**
 * Definition of the exception to be thrown in case of an action violates a constrain on a repository structure.
 *
 * This file was ported from the Java JCR API to PHP by
 * Karsten Dambekalns <karsten@typo3.org> for the FLOW3 project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Lesser General Public License as published by the
 * Free Software Foundation, either version 3 of the License, or (at your
 * option) any later version. Alternatively, you may use the Simplified
 * BSD License.
 *
 * This script is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser
 * General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with the script.
 * If not, see {@link http://www.gnu.org/licenses/lgpl.html}.
 *
 * The TYPO3 project - inspiring people to share!
 *
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 * @license http://opensource.org/licenses/bsd-license.php Simplified BSD License
 *
 * @package phpcr
 * @subpackage exceptions
 */

declare(ENCODING = 'utf-8');
namespace PHPCR;

/**
 * Exception thrown when an action would violate a constraint on repository structure.
 *
 * For example, when an attempt is made to persistently add an
 * item to a node that would violate that node's node type.
 *
 * @package phpcr
 * @subpackage exceptions
 * @api
 */
class ConstraintViolationException extends \PHPCR\RepositoryException {
}