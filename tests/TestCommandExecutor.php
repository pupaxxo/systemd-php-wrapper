<?php

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
  dev-disk-by\x2did-ata\x2dVMware_Virtual_IDE_CDROM_Drive_00000000000000000001.device              loaded    active   plugged   VMware_Virtual_IDE_CDROM_Drive
  dev-disk-by\x2dpartuuid-9cda857f\x2d01.device                                                    loaded    active   plugged   Virtual_disk 1
  dev-disk-by\x2dpartuuid-e8d9caa2\x2d01.device                                                    loaded    active   plugged   Virtual_disk 1
  dev-disk-by\x2dpartuuid-e8d9caa2\x2d02.device                                                    loaded    active   plugged   Virtual_disk 2
  dev-disk-by\x2dpartuuid-e8d9caa2\x2d05.device                                                    loaded    active   plugged   Virtual_disk 5
  dev-disk-by\x2dpath-pci\x2d0000:00:07.1\x2data\x2d1.device                                       loaded    active   plugged   VMware_Virtual_IDE_CDROM_Drive
  dev-disk-by\x2dpath-pci\x2d0000:03:00.0\x2dscsi\x2d0:0:0:0.device                                loaded    active   plugged   Virtual_disk
  dev-disk-by\x2dpath-pci\x2d0000:03:00.0\x2dscsi\x2d0:0:0:0\x2dpart1.device                       loaded    active   plugged   Virtual_disk 1
  dev-disk-by\x2dpath-pci\x2d0000:03:00.0\x2dscsi\x2d0:0:0:0\x2dpart2.device                       loaded    active   plugged   Virtual_disk 2
  dev-disk-by\x2dpath-pci\x2d0000:03:00.0\x2dscsi\x2d0:0:0:0\x2dpart5.device                       loaded    active   plugged   Virtual_disk 5
  dev-disk-by\x2dpath-pci\x2d0000:03:00.0\x2dscsi\x2d0:0:1:0.device                                loaded    active   plugged   Virtual_disk
  dev-disk-by\x2dpath-pci\x2d0000:03:00.0\x2dscsi\x2d0:0:1:0\x2dpart1.device                       loaded    active   plugged   Virtual_disk 1
  dev-disk-by\x2duuid-03bd85d4\x2d105b\x2d4333\x2d8f29\x2d26c982ede3eb.device                      loaded    active   plugged   Virtual_disk 1
  dev-disk-by\x2duuid-92641768\x2d25c5\x2d490e\x2d9ffe\x2de6f55490efe9.device                      loaded    active   plugged   Virtual_disk 5
  dev-disk-by\x2duuid-b1f1b73a\x2da142\x2d4e12\x2d9c9c\x2d4bc47073c6f5.device                      loaded    active   plugged   Virtual_disk 1
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
  sys-devices-pci0000:00-0000:00:07.1-ata1-host0-target0:0:0-0:0:0:0-block-sr0.device              loaded    active   plugged   VMware_Virtual_IDE_CDROM_Drive
  sys-devices-pci0000:00-0000:00:15.0-0000:03:00.0-host2-target2:0:0-2:0:0:0-block-sda-sda1.device loaded    active   plugged   Virtual_disk 1
  sys-devices-pci0000:00-0000:00:15.0-0000:03:00.0-host2-target2:0:0-2:0:0:0-block-sda-sda2.device loaded    active   plugged   Virtual_disk 2
  sys-devices-pci0000:00-0000:00:15.0-0000:03:00.0-host2-target2:0:0-2:0:0:0-block-sda-sda5.device loaded    active   plugged   Virtual_disk 5
  sys-devices-pci0000:00-0000:00:15.0-0000:03:00.0-host2-target2:0:0-2:0:0:0-block-sda.device      loaded    active   plugged   Virtual_disk
  sys-devices-pci0000:00-0000:00:15.0-0000:03:00.0-host2-target2:0:1-2:0:1:0-block-sdb-sdb1.device loaded    active   plugged   Virtual_disk 1
  sys-devices-pci0000:00-0000:00:15.0-0000:03:00.0-host2-target2:0:1-2:0:1:0-block-sdb.device      loaded    active   plugged   Virtual_disk
  sys-devices-pci0000:00-0000:00:16.0-0000:0b:00.0-net-ens192.device                               loaded    active   plugged   VMXNET3 Ethernet Controller
  sys-devices-platform-serial8250-tty-ttyS0.device                                                 loaded    active   plugged   /sys/devices/platform/serial8250/tty/ttyS0
  sys-devices-platform-serial8250-tty-ttyS1.device                                                 loaded    active   plugged   /sys/devices/platform/serial8250/tty/ttyS1
  sys-devices-platform-serial8250-tty-ttyS2.device                                                 loaded    active   plugged   /sys/devices/platform/serial8250/tty/ttyS2
  sys-devices-platform-serial8250-tty-ttyS3.device                                                 loaded    active   plugged   /sys/devices/platform/serial8250/tty/ttyS3
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
  dev-disk-by\x2dpartuuid-e8d9caa2\x2d05.swap                                                      loaded    active   active    /dev/disk/by-partuuid/e8d9caa2-05
  dev-disk-by\x2dpath-pci\x2d0000:03:00.0\x2dscsi\x2d0:0:0:0\x2dpart5.swap                         loaded    active   active    /dev/disk/by-path/pci-0000:03:00.0-scsi-0:0:0:0-part5
  dev-disk-by\x2duuid-92641768\x2d25c5\x2d490e\x2d9ffe\x2de6f55490efe9.swap                        loaded    active   active    /dev/disk/by-uuid/92641768-25c5-490e-9ffe-e6f55490efe9
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
To show all installed unit files use \'systemctl list-unit-files\'.'
    ];

    /**
     * Execute specified command as root
     * @param array $command
     * @return CommandResult
     */
    public function executeAsRoot(array $command): CommandResult
    {
        if (isset(static::outputs[implode(' ', $command)])) {
            return new CommandResult(0, static::outputs[implode(' ', $command)], '');
        }
        return new CommandResult(1, '', 'Command not found!');
    }

    /**
     * Execute specified command
     * @param array $command
     * @return CommandResult
     */
    public function execute(array $command): CommandResult
    {
        if (isset(static::outputs[implode(' ', $command)])) {
            return new CommandResult(0, static::outputs[implode(' ', $command)], '');
        }
        return new CommandResult(1, '', 'Command not found!');
    }
}