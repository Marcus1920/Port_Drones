<<<<<<< HEAD
/**
 * Automatically detect IP addresses in dot notation. Goes perfectly with the
 * IP address sorting function.
 *
 *  @name IP address detection
 *  @summary Detect data which is in IP address notation
 *  @author Brad Wasson
 */

jQuery.fn.dataTableExt.aTypes.unshift(
	function ( sData )
	{
		if (/^\d{1,3}[\.]\d{1,3}[\.]\d{1,3}[\.]\d{1,3}$/.test(sData)) {
			return 'ip-address';
		}
		return null;
	}
);
=======
/**
 * Automatically detect IP addresses in dot notation. Goes perfectly with the
 * IP address sorting function.
 *
 *  @name IP address detection
 *  @summary Detect data which is in IP address notation
 *  @author Brad Wasson
 */

jQuery.fn.dataTableExt.aTypes.unshift(
	function ( sData )
	{
		if (/^\d{1,3}[\.]\d{1,3}[\.]\d{1,3}[\.]\d{1,3}$/.test(sData)) {
			return 'ip-address';
		}
		return null;
	}
);
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
