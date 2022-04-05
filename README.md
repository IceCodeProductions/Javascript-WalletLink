# Javascript-WalletLink
 A pure javascript CDN accessable library for use Coinwallet SDK.  The build file found in the build folder will be able to by copied to your CDN that you choose or placed on the local server.  In javascript you can access the library with    const coinbaseWallet = new CoinbaseWalletSDK()   

 When coping the build folder, I recommend that a build number that matches the coinbaseWalletSDK such as 3.0.1/wallet-sdk-bundle.js  This will allow you to test different versions of the build before applying to production.

# Requirements
 NODE.js 
 Webpack

# Uppdate
 I delete the files in the build directory first
 terminal mode

 npm upgrade

# Build
terminal mode

 npm run build


# Deploy
I then create a folder on my CDN /coinbase/{version}/ and then copy the files in the build directory wallet-sdk-bundle.js and the license file.  I set this to everyone read-only or whatever your cdn security requires.

Or create a folder on your server js then add the coinbase/{version}/and then copy the files in the build directory wallet-sdk-bundle.js and the license file. Be sure these files/folder are read only


# Example
The index.html in the example file shows how to access the library and how to start the coinbase Wallet SDK.  All other information about the usage is found https://github.com/coinbase/coinbase-wallet-sdk
 
 
