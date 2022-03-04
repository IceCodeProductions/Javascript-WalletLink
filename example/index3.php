<!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8" />
     <title>Getting Started</title>
    </head>
    <body>
    <script type="text/javascript" src="https://dh3o9ipv3nlvy.cloudfront.net/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://dh3o9ipv3nlvy.cloudfront.net/js/popper.min.js"></script>
<script type="text/javascript" src="https://dh3o9ipv3nlvy.cloudfront.net/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://dh3o9ipv3nlvy.cloudfront.net/js/mdb.min.js"></script>


        <script src="https://unpkg.com/web3@latest/dist/web3.min.js"></script>
        <!-- <script src="https://dh3o9ipv3nlvy.cloudfront.net/js/walletlink/2.4.5/walletlink-bundle.js"></script> -->
        <script src="https://dh3o9ipv3nlvy.cloudfront.net/js/coinbase/3.0.1/wallet-sdk-bundle.js"></script>
        <!-- <script src="walletlink-bundle.js"></script> -->
       
        <script>
          const APP_NAME = 'My Awesome DApp'
          const APP_LOGO_URL = 'https://example.com/logo.png'
          const ETH_JSONRPC_URL = 'https://mainnet.infura.io/v3/84842078b09946638c03157f83405213'
          const CHAIN_ID = 1

          const coinbaseWallet = new CoinbaseWalletSDK({
            appName: APP_NAME,
            appLogoUrl: APP_LOGO_URL ,
            darkMode: false
          })
        
          const ethereum = coinbaseWallet.makeWeb3Provider(
            ETH_JSONRPC_URL , 1
          )

          const web3 = new Web3(ethereum)
          ethereum.enable()
        
        </script>
    </body>
  </html>