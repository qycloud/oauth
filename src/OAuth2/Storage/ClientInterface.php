<?php

namespace OAuth2\Storage;

/**
 * Implement this interface to specify where the OAuth2 Server
 * should retrieve client information
 *
 * @author Brent Shaffer <bshafs at gmail dot com>
 */
interface ClientInterface
{
    public function getClientDetails($client_id,$grant_type);

    public function getClientScope($client_id,$grant_type);

    /**
     * Check restricted grant types of corresponding client identifier.
     *
     * If you want to restrict clients to certain grant types, override this
     * function.
     *
     * @param $client_id
     * Client identifier to be check with.
     * @param $grant_type
     * Grant type to be check with
     *
     * @return
     * TRUE if the grant type is supported by this client identifier, and
     * FALSE if it isn't.
     *
     * @ingroup oauth2_section_4
     */
    public function checkRestrictedGrantType($client_id, $grant_type);
}
