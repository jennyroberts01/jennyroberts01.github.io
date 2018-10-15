#Load require packages
require(gdata)
require(caTools)
require(Hmisc)
require(seacarb)

#Load file containing relevant d11B data
#Define the path name of the excel file containing the d11B data.
d11B_datafile <- read.xls ("Benthic_d11B.xlsx", sheet = 1, header = TRUE)
d11B<- d11B_datafile$"d11B_permil"

#Define the T(oK) and S(psu) of each data point. If it is the same for evey data point, use the function below.
T_d<- 25
S<- 35

#Define pressure (bar) of your site. If you only know the depth, then you can use the seacarb function below to determine the pressure. 
P_bar<-d2p(3581,lat=-55.16233)/10

#-------
#You shouldn't need to change anything below here... 
#Temperature in K
T<- T_d+273.15
#Boron isotopic composition of seawater (Foster et al. 2010)
d11B_sw<- 39.61 
#Dissociation constant (Klochko et al. 2006)
alpha_B<- 1.0272

#d11B of borate (if Cibicidoides was measured then there is no fractionation (Rae et al. 2011))
d11B_borate<- d11B


#Calculate KB(0) from Zeebe pg 262
KB_0<-exp(((-8966.90-(2890.53*(S^0.5))-(77.942*S)+(1.728*(S^1.5))-(0.0996*(S^2)))/T)+148.0248+(137.1942*(S^0.5))+(1.62142*S)-((24.4344+(25.085*(S^0.5))+(0.2474*S))*log(T))+(0.053105*(S^0.5)*T))
-log10(KB_0)

#Pressure dependance on equilibrium constant
#Calculate DeltaVi
Vi=-29.48+0.1622*T_d+0.0026080*T_d^2
#Calculate Delta ki
Ki=-0.00284
#Pressure dependance of KB
KB_P=-log10(exp((-Vi*P)/(83.131*T)+(0.5*Ki*P^2)/(83.131*T))*KB_0)

#Calculate pH
pH <- KB_P-log10(-1*(d11B_sw-d11B_borate)/(d11B_sw-(alpha_B*d11B_borate)-(1000*(alpha_B-1))))
