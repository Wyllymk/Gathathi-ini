<?php
/**
 * Custom search form styled to match the theme.
 */
?>
<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="flex border border-[rgba(245,241,232,.14)]">
  <label class="sr-only" for="s"><?php esc_html_e('Search for:','gathathiini'); ?></label>
  <input type="search" id="s" name="s" placeholder="<?php esc_attr_e('Search…','gathathiini'); ?>"
         value="<?php echo esc_attr(get_search_query()); ?>"
         class="flex-1 bg-transparent px-4 py-2.5 text-sm placeholder:text-white/30 text-white focus:outline-none"/>
  <button type="submit" class="btn-gold px-5 py-2 text-[11px] tracking-[0.2em] uppercase font-display flex-shrink-0">Go</button>
</form>
