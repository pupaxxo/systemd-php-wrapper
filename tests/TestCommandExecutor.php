<?php

/**
 * Copyright 2019 - Andrea Ruggiero
 */

use Pupax\SystemdWrapper\CommandExecutor\CommandExecutorInterface;
use Pupax\SystemdWrapper\CommandExecutor\CommandResult;

/**
 * Created by PhpStorm.
 * User: andrearuggiero
 * Date: 2019-01-13
 * Time: 17:15
 */

class TestCommandExecutor implements CommandExecutorInterface
{
    const outputs = [
        'systemctl list-timers --all --no-pager' => 'NEXT                         LEFT          LAST                         PASSED       UNIT                         ACTIVATES
Sun 2019-01-13 23:01:16 CET  5h 16min left Sun 2019-01-13 15:21:07 CET  2h 23min ago apt-daily.timer              apt-daily.service
Mon 2019-01-14 06:21:38 CET  12h left      Sun 2019-01-13 06:47:06 CET  10h ago      apt-daily-upgrade.timer      apt-daily-upgrade.service
Mon 2019-01-14 14:59:07 CET  21h left      Sun 2019-01-13 14:59:07 CET  2h 45min ago systemd-tmpfiles-clean.timer systemd-tmpfiles-clean.service

3 timers listed.',
        'systemctl list-units --all --no-pager' => '  UNIT                                                                                             LOAD      ACTIVE   SUB       DESCRIPTION
  proc-sys-fs-binfmt_misc.automount                                                                loaded    active   waiting   Arbitrary Executable File Formats File System Automount Point
  dev-cdrom.device                                                                                 loaded    active   plugged   VMware_Virtual_IDE_CDROM_Drive
  dev-cdrw.device                                                                                  loaded    active   plugged   VMware_Virtual_IDE_CDROM_Drive
  dev-disk-by\                                                                                     loaded    active   plugged   VMware_Virtual_IDE_CDROM_Drive
  dev-disk-by\                                                                                     loaded    active   plugged   Virtual_disk 1
  dev-disk-by\                                                                                     loaded    active   plugged   Virtual_disk 1
  dev-disk-by\                                                                                     loaded    active   plugged   Virtual_disk 2
  dev-disk-by\                                                                                     loaded    active   plugged   Virtual_disk 5
  dev-disk-by\                                                                                     loaded    active   plugged   VMware_Virtual_IDE_CDROM_Drive
  dev-disk-by\                                                                                     loaded    active   plugged   Virtual_disk
  dev-disk-by\                                                                                     loaded    active   plugged   Virtual_disk 1
  dev-disk-by\                                                                                     loaded    active   plugged   Virtual_disk 2
  dev-disk-by\                                                                                     loaded    active   plugged   Virtual_disk 5
  dev-disk-by\                                                                                     loaded    active   plugged   Virtual_disk
  dev-disk-by\                                                                                     loaded    active   plugged   Virtual_disk 1
  dev-disk-by\                                                                                     loaded    active   plugged   Virtual_disk 1
  dev-disk-by\                                                                                     loaded    active   plugged   Virtual_disk 5
  dev-disk-by\                                                                                     loaded    active   plugged   Virtual_disk 1
  dev-dvd.device                                                                                   loaded    active   plugged   VMware_Virtual_IDE_CDROM_Drive
  dev-sda.device                                                                                   loaded    active   plugged   Virtual_disk
  dev-sda1.device                                                                                  loaded    active   plugged   Virtual_disk 1
  dev-sda2.device                                                                                  loaded    active   plugged   Virtual_disk 2
  dev-sda5.device                                                                                  loaded    active   plugged   Virtual_disk 5
  dev-sdb.device                                                                                   loaded    active   plugged   Virtual_disk
  dev-sdb1.device                                                                                  loaded    active   plugged   Virtual_disk 1
  dev-sr0.device                                                                                   loaded    active   plugged   VMware_Virtual_IDE_CDROM_Drive
  dev-ttyS0.device                                                                                 loaded    active   plugged   /dev/ttyS0
  dev-ttyS1.device                                                                                 loaded    active   plugged   /dev/ttyS1
  dev-ttyS2.device                                                                                 loaded    active   plugged   /dev/ttyS2
  dev-ttyS3.device                                                                                 loaded    active   plugged   /dev/ttyS3
  sys-devices-pci0                                                                                 loaded    active   plugged   VMware_Virtual_IDE_CDROM_Drive
  sys-devices-pci0                                                                                 loaded    active   plugged   Virtual_disk 1
  sys-devices-pci0                                                                                 loaded    active   plugged   Virtual_disk 2
  sys-devices-pci0                                                                                 loaded    active   plugged   Virtual_disk 5
  sys-devices-pci0                                                                                 loaded    active   plugged   Virtual_disk
  sys-devices-pci0                                                                                 loaded    active   plugged   Virtual_disk 1
  sys-devices-pci0                                                                                 loaded    active   plugged   Virtual_disk
  sys-devices-pci0                                                                                 loaded    active   plugged   VMXNET3 Ethernet Controller
  sys-devices-plat                                                                                 loaded    active   plugged   /sys/devices/platform//tty/ttyS0
  sys-devices-plat                                                                                 loaded    active   plugged   /sys/devices/platform//tty/ttyS1
  sys-devices-plat                                                                                 loaded    active   plugged   /sys/devices/platform//tty/ttyS2
  sys-devices-plat                                                                                 loaded    active   plugged   /sys/devices/platform//tty/ttyS3
  sys-subsystem-net-devices-ens192.device                                                          loaded    active   plugged   VMXNET3 Ethernet Controller
  -.mount                                                                                          loaded    active   mounted   Root Mount
  dev-hugepages.mount                                                                              loaded    active   mounted   Huge Pages File System
  dev-mqueue.mount                                                                                 loaded    active   mounted   POSIX Message Queue File System
  mnt-data.mount                                                                                   loaded    active   mounted   /mnt/data
  proc-sys-fs-binfmt_misc.mount                                                                    loaded    inactive dead      Arbitrary Executable File Formats File System
  run-user-0.mount                                                                                 loaded    active   mounted   /run/user/0
  sys-fs-fuse-connections.mount                                                                    loaded    inactive dead      FUSE Control File System
  sys-kernel-config.mount                                                                          loaded    inactive dead      Configuration File System
  sys-kernel-debug.mount                                                                           loaded    active   mounted   Debug File System
● tmp.mount                                                                                        not-found inactive dead      tmp.mount
  systemd-ask-password-console.path                                                                loaded    active   waiting   Dispatch Password Requests to Console Directory Watch
  systemd-ask-password-wall.path                                                                   loaded    active   waiting   Forward Password Requests to Wall Directory Watch
  init.scope                                                                                       loaded    active   running   System and Service Manager
  session-31.scope                                                                                 loaded    active   running   Session 31 of user root
● apparmor.service                                                                                 not-found inactive dead      apparmor.service
  apt-daily-upgrade.service                                                                        loaded    inactive dead      Daily apt upgrade and clean activities
  apt-daily.service                                                                                loaded    inactive dead      Daily apt download activities
● auditd.service                                                                                   not-found inactive dead      auditd.service
● clamav-daemon.service                                                                            not-found inactive dead      clamav-daemon.service
● cloud-init-local.service                                                                         not-found inactive dead      cloud-init-local.service
● console-screen.service                                                                           not-found inactive dead      console-screen.service
  console-setup.service                                                                            loaded    active   exited    Set console font and keymap
  cron.service                                                                                     loaded    active   running   Regular background program processing daemon
  dbus.service                                                                                     loaded    active   running   D-Bus System Message Bus
  deluge-web.service                                                                               loaded    active   running   Deluge Bittorrent Client Web Interface
  deluged.service                                                                                  loaded    active   running   Deluge Bittorrent Client Daemon
● display-manager.service                                                                          not-found inactive dead      display-manager.service
  emergency.service                                                                                loaded    inactive dead      Emergency Shell
  exim4.service                                                                                    loaded    active   running   LSB: exim Mail Transport Agent
  getty-static.service                                                                             loaded    inactive dead      getty on tty2-tty6 if dbus and logind are not available
  getty@tty1.service                                                                               loaded    active   running   Getty on tty1
● greylist.service                                                                                 not-found inactive dead      greylist.service
  ifup@ens192.service                                                                              loaded    active   exited    ifup for ens192
  irqbalance.service                                                                               loaded    inactive dead      irqbalance daemon
● kbd.service                                                                                      not-found inactive dead      kbd.service
  keyboard-setup.service                                                                           loaded    active   exited    Set the console keyboard layout
  kmod-static-nodes.service                                                                        loaded    active   exited    Create list of required static device nodes for the current kernel
● mysql.service                                                                                    not-found inactive dead      mysql.service
  networking.service                                                                               loaded    active   exited    Raise network interfaces
  nginx.service                                                                                    loaded    active   running   A high performance web server and a reverse proxy server
  nmbd.service                                                                                     loaded    active   running   Samba NMB Daemon
  open-vm-tools.service                                                                            loaded    active   running   Service for virtual machines hosted on VMware
● plymouth-quit-wait.service                                                                       not-found inactive dead      plymouth-quit-wait.service
● plymouth-start.service                                                                           not-found inactive dead      plymouth-start.service
● postgresql.service                                                                               not-found inactive dead      postgresql.service
  rc-local.service                                                                                 loaded    inactive dead      /etc/rc.local Compatibility
  rescue.service                                                                                   loaded    inactive dead      Rescue Shell
  rsync.service                                                                                    loaded    inactive dead      fast remote file copy program daemon
  rsyslog.service                                                                                  loaded    active   running   System Logging Service
  smbd.service                                                                                     loaded    active   running   Samba SMB Daemon
● spamassassin.service                                                                             not-found inactive dead      spamassassin.service
  ssh.service                                                                                      loaded    active   running   OpenBSD Secure Shell server
  systemd-ask-password-console.service                                                             loaded    inactive dead      Dispatch Password Requests to Console
  systemd-ask-password-wall.service                                                                loaded    inactive dead      Forward Password Requests to Wall
  systemd-binfmt.service                                                                           loaded    inactive dead      Set Up Additional Binary Formats
  systemd-fsck-root.service                                                                        loaded    inactive dead      File System Check on Root Device
  systemd-fsck@dev-sdb1.service                                                                    loaded    inactive dead      File System Check on /dev/sdb1
  systemd-fsckd.service                                                                            loaded    inactive dead      File System Check Daemon to report status
  systemd-hwdb-update.service                                                                      loaded    inactive dead      Rebuild Hardware Database
  systemd-initctl.service                                                                          loaded    inactive dead      /dev/initctl Compatibility Daemon
  systemd-journal-flush.service                                                                    loaded    active   exited    Flush Journal to Persistent Storage
  systemd-journald.service                                                                         loaded    active   running   Journal Service
  systemd-logind.service                                                                           loaded    active   running   Login Service
  systemd-machine-id-commit.service                                                                loaded    inactive dead      Commit a transient machine-id on disk
  systemd-modules-load.service                                                                     loaded    active   exited    Load Kernel Modules
  systemd-quotacheck.service                                                                       loaded    inactive dead      File System Quota Check
  systemd-random-seed.service                                                                      loaded    active   exited    Load/Save Random Seed
  systemd-remount-fs.service                                                                       loaded    active   exited    Remount Root and Kernel File Systems
  systemd-sysctl.service                                                                           loaded    active   exited    Apply Kernel Variables
● systemd-sysusers.service                                                                         not-found inactive dead      systemd-sysusers.service
  systemd-timesyncd.service                                                                        loaded    active   running   Network Time Synchronization
  systemd-tmpfiles-clean.service                                                                   loaded    inactive dead      Cleanup of Temporary Directories
  systemd-tmpfiles-setup-dev.service                                                               loaded    active   exited    Create Static Device Nodes in /dev
  systemd-tmpfiles-setup.service                                                                   loaded    active   exited    Create Volatile Files and Directories
  systemd-udev-trigger.service                                                                     loaded    active   exited    udev Coldplug all Devices
  systemd-udevd.service                                                                            loaded    active   running   udev Kernel Device Manager
● systemd-update-done.service                                                                      not-found inactive dead      systemd-update-done.service
  systemd-update-utmp-runlevel.service                                                             loaded    inactive dead      Update UTMP about System Runlevel Changes
  systemd-update-utmp.service                                                                      loaded    active   exited    Update UTMP about System Boot/Shutdown
  systemd-user-sessions.service                                                                    loaded    active   exited    Permit User Sessions
● systemd-vconsole-setup.service                                                                   not-found inactive dead      systemd-vconsole-setup.service
  unattended-upgrades.service                                                                      loaded    active   exited    Unattended Upgrades Shutdown
  user@0.service                                                                                   loaded    active   running   User Manager for UID 0
  vgauth.service                                                                                   loaded    active   running   Authentication service for virtual machines hosted on VMware
● winbind.service                                                                                  not-found inactive dead      winbind.service
  -.slice                                                                                          loaded    active   active    Root Slice
  system-getty.slice                                                                               loaded    active   active    system-getty.slice
  system-systemd\x2dfsck.slice                                                                     loaded    inactive dead      system-systemd\x2dfsck.slice
  system.slice                                                                                     loaded    active   active    System Slice
  user-0.slice                                                                                     loaded    active   active    User Slice of root
  user.slice                                                                                       loaded    active   active    User and Session Slice
  dbus.socket                                                                                      loaded    active   running   D-Bus System Message Bus Socket
  syslog.socket                                                                                    loaded    active   running   Syslog Socket
  systemd-fsckd.socket                                                                             loaded    active   listening fsck to fsckd communication Socket
  systemd-initctl.socket                                                                           loaded    active   listening /dev/initctl Compatibility Named Pipe
  systemd-journald-audit.socket                                                                    loaded    active   running   Journal Audit Socket
  systemd-journald-dev-log.socket                                                                  loaded    active   running   Journal Socket (/dev/log)
  systemd-journald.socket                                                                          loaded    active   running   Journal Socket
  systemd-udevd-control.socket                                                                     loaded    active   running   udev Control Socket
  systemd-udevd-kernel.socket                                                                      loaded    active   running   udev Kernel Socket
  dev-disk-                                                                                        loaded    active   active    /dev/disk/by-partuuid/ 
  dev-disk-                                                                                        loaded    active   active    /dev/disk/by-path/ 
  dev-disk-                                                                                        loaded    active   active    /dev/disk/by-uuid/          
  dev-sda5.swap                                                                                    loaded    active   active    /dev/sda5
  basic.target                                                                                     loaded    active   active    Basic System
  cryptsetup.target                                                                                loaded    active   active    Encrypted Volumes
  emergency.target                                                                                 loaded    inactive dead      Emergency Mode
  getty.target                                                                                     loaded    active   active    Login Prompts
  graphical.target                                                                                 loaded    active   active    Graphical Interface
  local-fs-pre.target                                                                              loaded    active   active    Local File Systems (Pre)
  local-fs.target                                                                                  loaded    active   active    Local File Systems
  multi-user.target                                                                                loaded    active   active    Multi-User System
  network-online.target                                                                            loaded    active   active    Network is Online
  network-pre.target                                                                               loaded    inactive dead      Network (Pre)
  network.target                                                                                   loaded    active   active    Network
  nss-lookup.target                                                                                loaded    inactive dead      Host and Network Name Lookups
  nss-user-lookup.target                                                                           loaded    inactive dead      User and Group Name Lookups
  paths.target                                                                                     loaded    active   active    Paths
  remote-fs-pre.target                                                                             loaded    inactive dead      Remote File Systems (Pre)
  remote-fs.target                                                                                 loaded    active   active    Remote File Systems
  rescue.target                                                                                    loaded    inactive dead      Rescue Mode
  shutdown.target                                                                                  loaded    inactive dead      Shutdown
  slices.target                                                                                    loaded    active   active    Slices
  sockets.target                                                                                   loaded    active   active    Sockets
  swap.target                                                                                      loaded    active   active    Swap
  sysinit.target                                                                                   loaded    active   active    System Initialization
  time-sync.target                                                                                 loaded    active   active    System Time Synchronized
  timers.target                                                                                    loaded    active   active    Timers
  umount.target                                                                                    loaded    inactive dead      Unmount All Filesystems
  apt-daily-upgrade.timer                                                                          loaded    active   waiting   Daily apt upgrade and clean activities
  apt-daily.timer                                                                                  loaded    active   waiting   Daily apt download activities
  systemd-tmpfiles-clean.timer                                                                     loaded    active   waiting   Daily Cleanup of Temporary Directories

LOAD   = Reflects whether the unit definition was properly loaded.
ACTIVE = The high-level unit activation state, i.e. generalization of SUB.
SUB    = The low-level unit activation state, values depend on unit type.

175 loaded units listed.
To show all installed unit files use \'systemctl list-unit-files\'.',
        'systemctl show --no-pager' => 'Version=232
Features=+PAM +AUDIT +SELINUX +IMA +APPARMOR +SMACK +SYSVINIT +UTMP +LIBCRYPTSETUP +GCRYPT +GNUTLS +ACL +XZ +LZ4 +SECCOMP +BLKID +ELFUTILS +KMOD +IDN
Virtualization=vmware
Architecture=x86-64
FirmwareTimestampMonotonic=0
LoaderTimestampMonotonic=0
KernelTimestamp=Sat 2019-01-12 14:42:36 CET
KernelTimestampMonotonic=0
InitRDTimestampMonotonic=0
UserspaceTimestamp=Sat 2019-01-12 14:42:37 CET
UserspaceTimestampMonotonic=1012150
FinishTimestamp=Sat 2019-01-12 14:42:39 CET
FinishTimestampMonotonic=3119842
SecurityStartTimestamp=Sat 2019-01-12 14:42:37 CET
SecurityStartTimestampMonotonic=1028436
SecurityFinishTimestamp=Sat 2019-01-12 14:42:37 CET
SecurityFinishTimestampMonotonic=1028540
GeneratorsStartTimestamp=Sat 2019-01-12 14:42:37 CET
GeneratorsStartTimestampMonotonic=1144164
GeneratorsFinishTimestamp=Sat 2019-01-12 14:42:37 CET
GeneratorsFinishTimestampMonotonic=1208436
UnitsLoadStartTimestamp=Sat 2019-01-12 14:42:37 CET
UnitsLoadStartTimestampMonotonic=1208637
UnitsLoadFinishTimestamp=Sat 2019-01-12 14:42:37 CET
UnitsLoadFinishTimestampMonotonic=1294962
LogLevel=info
LogTarget=journal-or-kmsg
NNames=181
NFailedUnits=0
NJobs=0
NInstalledJobs=3859747555
NFailedJobs=33554432
Progress=1
Environment=LANG=it_IT.UTF-8 PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin
ConfirmSpawn=no
ShowStatus=yes
UnitPath=/run/systemd/transient /etc/systemd/system /run/systemd/system /run/systemd/generator /lib/systemd/system /run/systemd/generator.late
DefaultStandardOutput=journal
DefaultStandardError=journal
RuntimeWatchdogUSec=0
ShutdownWatchdogUSec=10min
SystemState=running
DefaultTimerAccuracyUSec=1min
DefaultTimeoutStartUSec=1min 30s
DefaultTimeoutStopUSec=1min 30s
DefaultRestartUSec=100ms
DefaultStartLimitIntervalSec=10000000
DefaultStartLimitBurst=5
DefaultCPUAccounting=no
DefaultBlockIOAccounting=no
DefaultMemoryAccounting=no
DefaultTasksAccounting=yes
DefaultLimitCPU=18446744073709551615
DefaultLimitCPUSoft=18446744073709551615
DefaultLimitFSIZE=18446744073709551615
DefaultLimitFSIZESoft=18446744073709551615
DefaultLimitDATA=18446744073709551615
DefaultLimitDATASoft=18446744073709551615
DefaultLimitSTACK=18446744073709551615
DefaultLimitSTACKSoft=8388608
DefaultLimitCORE=18446744073709551615
DefaultLimitCORESoft=0
DefaultLimitRSS=18446744073709551615
DefaultLimitRSSSoft=18446744073709551615
DefaultLimitNOFILE=4096
DefaultLimitNOFILESoft=1024
DefaultLimitAS=18446744073709551615
DefaultLimitASSoft=18446744073709551615
DefaultLimitNPROC=7930
DefaultLimitNPROCSoft=7930
DefaultLimitMEMLOCK=65536
DefaultLimitMEMLOCKSoft=65536
DefaultLimitLOCKS=18446744073709551615
DefaultLimitLOCKSSoft=18446744073709551615
DefaultLimitSIGPENDING=7930
DefaultLimitSIGPENDINGSoft=7930
DefaultLimitMSGQUEUE=819200
DefaultLimitMSGQUEUESoft=819200
DefaultLimitNICE=0
DefaultLimitNICESoft=0
DefaultLimitRTPRIO=0
DefaultLimitRTPRIOSoft=0
DefaultLimitRTTIME=18446744073709551615
DefaultLimitRTTIMESoft=18446744073709551615
DefaultTasksMax=4915
TimerSlackNSec=50000',
        'systemctl show cron --no-pager' => 'Type=simple
Restart=no
NotifyAccess=none
RestartUSec=100ms
TimeoutStartUSec=1min 30s
TimeoutStopUSec=1min 30s
RuntimeMaxUSec=infinity
WatchdogUSec=0
WatchdogTimestamp=Sat 2019-01-12 14:42:38 CET
WatchdogTimestampMonotonic=2408634
FailureAction=none
PermissionsStartOnly=no
RootDirectoryStartOnly=no
RemainAfterExit=no
GuessMainPID=yes
MainPID=434
ControlPID=0
FileDescriptorStoreMax=0
NFileDescriptorStore=0
StatusErrno=0
Result=success
UID=4294967295
GID=4294967295
ExecMainStartTimestamp=Sat 2019-01-12 14:42:38 CET
ExecMainStartTimestampMonotonic=2408615
ExecMainExitTimestampMonotonic=0
ExecMainPID=434
ExecMainCode=0
ExecMainStatus=0
ExecStart={ path=/usr/sbin/cron ; argv[]=/usr/sbin/cron -f $EXTRA_OPTS ; ignore_errors=no ; start_time=[n/a] ; stop_time=[n/a] ; pid=0 ; code=(null) ; status=0/0 }
Slice=system.slice
ControlGroup=/system.slice/cron.service
MemoryCurrent=18446744073709551615
CPUUsageNSec=18446744073709551615
TasksCurrent=1
Delegate=no
CPUAccounting=no
CPUWeight=18446744073709551615
StartupCPUWeight=18446744073709551615
CPUShares=18446744073709551615
StartupCPUShares=18446744073709551615
CPUQuotaPerSecUSec=infinity
IOAccounting=no
IOWeight=18446744073709551615
StartupIOWeight=18446744073709551615
BlockIOAccounting=no
BlockIOWeight=18446744073709551615
StartupBlockIOWeight=18446744073709551615
MemoryAccounting=no
MemoryLow=0
MemoryHigh=18446744073709551615
MemoryMax=18446744073709551615
MemorySwapMax=18446744073709551615
MemoryLimit=18446744073709551615
DevicePolicy=auto
TasksAccounting=yes
TasksMax=4915
EnvironmentFile=/etc/default/cron (ignore_errors=yes)
UMask=0022
LimitCPU=18446744073709551615
LimitCPUSoft=18446744073709551615
LimitFSIZE=18446744073709551615
LimitFSIZESoft=18446744073709551615
LimitDATA=18446744073709551615
LimitDATASoft=18446744073709551615
LimitSTACK=18446744073709551615
LimitSTACKSoft=8388608
LimitCORE=18446744073709551615
LimitCORESoft=0
LimitRSS=18446744073709551615
LimitRSSSoft=18446744073709551615
LimitNOFILE=4096
LimitNOFILESoft=1024
LimitAS=18446744073709551615
LimitASSoft=18446744073709551615
LimitNPROC=7930
LimitNPROCSoft=7930
LimitMEMLOCK=65536
LimitMEMLOCKSoft=65536
LimitLOCKS=18446744073709551615
LimitLOCKSSoft=18446744073709551615
LimitSIGPENDING=7930
LimitSIGPENDINGSoft=7930
LimitMSGQUEUE=819200
LimitMSGQUEUESoft=819200
LimitNICE=0
LimitNICESoft=0
LimitRTPRIO=0
LimitRTPRIOSoft=0
LimitRTTIME=18446744073709551615
LimitRTTIMESoft=18446744073709551615
OOMScoreAdjust=0
Nice=0
IOScheduling=0
CPUSchedulingPolicy=0
CPUSchedulingPriority=0
TimerSlackNSec=50000
CPUSchedulingResetOnFork=no
NonBlocking=no
StandardInput=null
StandardOutput=journal
StandardError=inherit
TTYReset=no
TTYVHangup=no
TTYVTDisallocate=no
SyslogPriority=30
SyslogLevelPrefix=yes
SyslogLevel=6
SyslogFacility=3
SecureBits=0
CapabilityBoundingSet=18446744073709551615
AmbientCapabilities=0
DynamicUser=no
RemoveIPC=no
MountFlags=0
PrivateTmp=no
PrivateDevices=no
ProtectKernelTunables=no
ProtectKernelModules=no
ProtectControlGroups=no
PrivateNetwork=no
PrivateUsers=no
ProtectHome=no
ProtectSystem=no
SameProcessGroup=no
UtmpMode=init
IgnoreSIGPIPE=no
NoNewPrivileges=no
SystemCallErrorNumber=0
RuntimeDirectoryMode=0755
MemoryDenyWriteExecute=no
RestrictRealtime=no
RestrictNamespace=2114060288
KillMode=process
KillSignal=15
SendSIGKILL=yes
SendSIGHUP=no
Id=cron.service
Names=cron.service
Requires=sysinit.target system.slice
WantedBy=multi-user.target
Conflicts=shutdown.target
Before=shutdown.target multi-user.target
After=basic.target systemd-journald.socket sysinit.target system.slice
Documentation=man:cron(8)
Description=Regular background program processing daemon
LoadState=loaded
ActiveState=active
SubState=running
FragmentPath=/lib/systemd/system/cron.service
UnitFileState=enabled
UnitFilePreset=enabled
StateChangeTimestamp=Sat 2019-01-12 14:42:38 CET
StateChangeTimestampMonotonic=2408636
InactiveExitTimestamp=Sat 2019-01-12 14:42:38 CET
InactiveExitTimestampMonotonic=2408636
ActiveEnterTimestamp=Sat 2019-01-12 14:42:38 CET
ActiveEnterTimestampMonotonic=2408636
ActiveExitTimestampMonotonic=0
InactiveEnterTimestampMonotonic=0
CanStart=yes
CanStop=yes
CanReload=no
CanIsolate=no
StopWhenUnneeded=no
RefuseManualStart=no
RefuseManualStop=no
AllowIsolate=no
DefaultDependencies=yes
OnFailureJobMode=replace
IgnoreOnIsolate=no
NeedDaemonReload=no
JobTimeoutUSec=infinity
JobTimeoutAction=none
ConditionResult=yes
AssertResult=yes
ConditionTimestamp=Sat 2019-01-12 14:42:38 CET
ConditionTimestampMonotonic=2402265
AssertTimestamp=Sat 2019-01-12 14:42:38 CET
AssertTimestampMonotonic=2402267
Transient=no
Perpetual=no
StartLimitIntervalSec=10000000
StartLimitBurst=5
StartLimitAction=none
InvocationID=        ',
        'systemctl list-sockets --all --no-pager' => 'LISTEN                          UNIT                            ACTIVATES
/run/systemd/fsck.progress      systemd-fsckd.socket            systemd-fsckd.service
/run/systemd/initctl/fifo       systemd-initctl.socket          systemd-initctl.service
/run/systemd/journal/dev-log    systemd-journald-dev-log.socket systemd-journald.service
/run/systemd/journal/socket     systemd-journald.socket         systemd-journald.service
/run/systemd/journal/stdout     systemd-journald.socket         systemd-journald.service
/run/systemd/journal/syslog     syslog.socket                   rsyslog.service
/run/udev/control               systemd-udevd-control.socket    systemd-udevd.service
/var/run/dbus/system_bus_socket dbus.socket                     dbus.service
audit 1                         systemd-journald-audit.socket   systemd-journald.service
kobject-uevent 1                systemd-udevd-kernel.socket     systemd-udevd.service

10 sockets listed.'
    ];

    /**
     * Execute specified command as root
     * @param array $command
     * @return CommandResult
     */
    public function executeAsRoot(array $command): CommandResult
    {
        $cli = implode(' ', $command);
        if (isset(static::outputs[$cli])) {
            return new CommandResult($cli, 0, static::outputs[implode(' ', $command)], '');
        }
        return new CommandResult($cli, 1, '', 'Command not found!');
    }

    /**
     * Execute specified command
     * @param array $command
     * @return CommandResult
     */
    public function execute(array $command): CommandResult
    {
        $cli = implode(' ', $command);
        if (isset(static::outputs[$cli])) {
            return new CommandResult($cli, 0, static::outputs[implode(' ', $command)], '');
        }
        return new CommandResult($cli, 1, '', 'Command not found!');
    }

    /**
     * Get systemctl binary path
     * @return string
     */
    public function getSystemCtlBinary(): string
    {
        return 'systemctl';
    }
}
