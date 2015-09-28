<?php

namespace OAuth2\Storage;

/**
 * Implement this interface to specify how the OAuth2 Server
 * should verify client credentials
 *
 * @author Brent Shaffer <bshafs at gmail dot com>
 */
interface ClientCredentialsInterface extends ClientInterface
{

    public function checkClientCredentials($client_id, $grant_types, $client_secret = null);

    /**
     * Determine if the client is a "public" client, and therefore
     * does not require passing credentials for certain grant types
     *
     * @param $client_id
     * Client identifier to be check with.
     *
     * @return
     * TRUE if the client is public, and FALSE if it isn't.
     * @endcode
     *
     * @see http://tools.ietf.org/html/rfc6749#section-2.3
     * @see https://github.com/bshaffer/oauth2-server-php/issues/257
     *
     * @ingroup oauth2_section_2
     */
    public function isPublicClient($client_id);
}
