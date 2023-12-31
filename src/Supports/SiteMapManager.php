<?php

namespace Admingate\Theme\Supports;

use BaseHelper;
use Admingate\Sitemap\Sitemap;
use Carbon\Carbon;
use Illuminate\Http\Response;

class SiteMapManager
{
    protected Sitemap $siteMap;

    public function __construct()
    {
        // create new site map object
        $this->siteMap = app('sitemap');

        // set cache (key (string), duration in minutes (Carbon|Datetime|int), turn on/off (boolean))
        // by default cache is disabled
        $this->siteMap->setCache('cache_site_map_key', setting('cache_time_site_map', 60), setting('enable_cache_site_map', true));

        if (! BaseHelper::getHomepageId()) {
            $this->siteMap->add(route('public.index'), Carbon::now()->toDateTimeString(), '1.0', 'daily');
        }
    }

    public function add(string $url, ?string $date, string $priority = '1.0', string $sequence = 'daily'): self
    {
        if (! $this->siteMap->isCached()) {
            $this->siteMap->add($url, $date, $priority, $sequence);
        }

        return $this;
    }

    public function render(string $type = 'xml'): Response
    {
        // show your site map (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
        return $this->siteMap->render($type);
    }
}
