// timeout (sleep)
const sleep = ms => {
	return new Promise(resolve => {
		setTimeout(() => resolve(), ms)
	})
}
sleep(2000).then(() => console.log('after 2 sec'))
// ****************************************************************************