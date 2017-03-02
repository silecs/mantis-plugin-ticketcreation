<?php
/**
 * @license http://www.gnu.org/licenses/gpl-3.0.html  GNU GPL v3
 */

/**
 * @author François Gannaz <francois.gannaz@silecs.info>
 */
class TicketCreationPlugin extends MantisPlugin
{
    /**
     * Init the plugin attributes.
     */
    function register()
    {
        $this->name = 'Ticket Creation';
        $this->description = "Plugin that creates a 'bug report page' that can be pre-filled by URL parameters.";
        $this->page = 'status';

        $this->version = '1.0';
        $this->requires = [
            'MantisCore' => '1.3.0, < 2.0',
        ];

        $this->author = 'François Gannaz / Silecs';
        $this->contact = 'francois.gannaz@silecs.info';
        $this->url = '';
    }

    /**
     * Declare hooks on Mantis events.
     *
     * @return array
     */
    public function hooks()
    {
        return [];
    }
}
