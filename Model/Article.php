<?php
	namespace gw\gw_oxid_orderby_size\Model;

	/**
	 * @see \OxidEsales\Eshop\Application\Model\Article
	 */
	class Article extends Article_parent {
		/**
		 * get_mysql_orderby_sizes function.
		 *
		 * @access public
		 * @static
		 * @return void
		 */
		public static function get_mysql_orderby_sizes($tablename = 'oxarticles', $separator = ' ') {
			$config = \OxidEsales\Eshop\Core\Registry::getConfig();
			$size_position = $config->getConfigParam('gw_oxid_orderby_size_variant_position');
			return "
	   		case
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."3XS".($size_position==0?$separator.'%':'')."'  then 1
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."XXS".($size_position==0?$separator.'%':'')."'  then 2
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."XS".($size_position==0?$separator.'%':'')."'   then 3
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."S".($size_position==0?$separator.'%':'')."'    then 4
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."M".($size_position==0?$separator.'%':'')."'    then 5
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."L".($size_position==0?$separator.'%':'')."'    then 6
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."XL".($size_position==0?$separator.'%':'')."'   then 7
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."XXL".($size_position==0?$separator.'%':'')."'  then 8
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."3XL".($size_position==0?$separator.'%':'')."'  then 9
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."4XL".($size_position==0?$separator.'%':'')."'  then 10
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."5XL".($size_position==0?$separator.'%':'')."'  then 11
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."6XL".($size_position==0?$separator.'%':'')."'  then 12
																					   
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."0".($size_position==0?$separator.'%':'')."'    then 25
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."1".($size_position==0?$separator.'%':'')."'    then 26
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."2".($size_position==0?$separator.'%':'')."'    then 27
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."3".($size_position==0?$separator.'%':'')."'    then 28
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."4".($size_position==0?$separator.'%':'')."'    then 29
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."5".($size_position==0?$separator.'%':'')."'    then 30
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."6".($size_position==0?$separator.'%':'')."'    then 31
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."7".($size_position==0?$separator.'%':'')."'    then 32
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."8".($size_position==0?$separator.'%':'')."'    then 33
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."9".($size_position==0?$separator.'%':'')."'    then 34
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."10".($size_position==0?$separator.'%':'')."'   then 35
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."11".($size_position==0?$separator.'%':'')."'   then 36
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."12".($size_position==0?$separator.'%':'')."'   then 37
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."13".($size_position==0?$separator.'%':'')."'   then 38
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."14".($size_position==0?$separator.'%':'')."'   then 39
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."15".($size_position==0?$separator.'%':'')."'   then 40
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."16".($size_position==0?$separator.'%':'')."'   then 41
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."17".($size_position==0?$separator.'%':'')."'   then 42
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."18".($size_position==0?$separator.'%':'')."'   then 43
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."19".($size_position==0?$separator.'%':'')."'   then 44
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."20".($size_position==0?$separator.'%':'')."'   then 45

	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."20".($size_position==0?$separator.'%':'')."'   then 46
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."21".($size_position==0?$separator.'%':'')."'   then 47
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."22".($size_position==0?$separator.'%':'')."'   then 48
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."23".($size_position==0?$separator.'%':'')."'   then 49
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."24".($size_position==0?$separator.'%':'')."'   then 50
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."25".($size_position==0?$separator.'%':'')."'   then 51
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."26".($size_position==0?$separator.'%':'')."'   then 52
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."27".($size_position==0?$separator.'%':'')."'   then 53
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."28".($size_position==0?$separator.'%':'')."'   then 54
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."29".($size_position==0?$separator.'%':'')."'   then 55
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."30".($size_position==0?$separator.'%':'')."'   then 56
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."31".($size_position==0?$separator.'%':'')."'   then 57
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."32".($size_position==0?$separator.'%':'')."'   then 58
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."33".($size_position==0?$separator.'%':'')."'   then 59
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."34".($size_position==0?$separator.'%':'')."'   then 60
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."35".($size_position==0?$separator.'%':'')."'   then 61
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."36".($size_position==0?$separator.'%':'')."'   then 62
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."37".($size_position==0?$separator.'%':'')."'   then 63
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."38".($size_position==0?$separator.'%':'')."'   then 64
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."39".($size_position==0?$separator.'%':'')."'   then 65
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."40".($size_position==0?$separator.'%':'')."'   then 66
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."41".($size_position==0?$separator.'%':'')."'   then 67
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."42".($size_position==0?$separator.'%':'')."'   then 68
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."43".($size_position==0?$separator.'%':'')."'   then 69
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."44".($size_position==0?$separator.'%':'')."'   then 70
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."45".($size_position==0?$separator.'%':'')."'   then 71
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."46".($size_position==0?$separator.'%':'')."'   then 72
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."47".($size_position==0?$separator.'%':'')."'   then 73
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."48".($size_position==0?$separator.'%':'')."'   then 74
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."49".($size_position==0?$separator.'%':'')."'   then 75
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."50".($size_position==0?$separator.'%':'')."'   then 76
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."51".($size_position==0?$separator.'%':'')."'   then 77
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."52".($size_position==0?$separator.'%':'')."'   then 78
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."53".($size_position==0?$separator.'%':'')."'   then 79
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."54".($size_position==0?$separator.'%':'')."'   then 80
	   			when $tablename.OXVARSELECT LIKE '".($size_position==1?'%'.$separator:'')."55".($size_position==0?$separator.'%':'')."'   then 81
	   		end,
	   		OXVARSELECT+0
	   		";
		}

		/**
		 * Forms query to load variants.
		 *
		 * @param bool                      $blRemoveNotOrderables
		 * @param bool                      $forceCoreTableUsage
		 * @param oxSimpleVariant|oxarticle $baseObject
		 * @param string                    $sArticleTable
		 *
		 * @return string
		 */
		protected function getLoadVariantsQuery($blRemoveNotOrderables, $forceCoreTableUsage, $baseObject, $sArticleTable) {
			$parent = null;
			if($this->getParentId()) {
				$parent = $this->getParentArticle();
			}
			$order_string = self::get_mysql_orderby_sizes($sArticleTable, (!$parent || $parent->hasMdVariants()?' ':''));
			return "select " . $baseObject->getSelectFields($forceCoreTableUsage) . " from $sArticleTable where " .
				$this->getActiveCheckQuery($forceCoreTableUsage) .
				$this->getVariantsQuery($blRemoveNotOrderables, $forceCoreTableUsage) .
				" order by".
				($order_string ? $order_string . ',' : '').
				"$sArticleTable.oxsort";
		}
	}
?>